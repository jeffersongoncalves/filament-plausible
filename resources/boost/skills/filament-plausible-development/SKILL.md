---
name: filament-plausible-development
description: Build and work with Filament Plausible plugin features, including Plausible Analytics tracking script injection, settings page management, domain and host configuration.
---

# Filament Plausible Development

## When to use this skill

Use this skill when:
- Adding Plausible Analytics tracking to a Filament panel
- Configuring Plausible domains and analytics host URL
- Setting up self-hosted Plausible with a custom host URL
- Disabling the settings page for script-only injection
- Customizing the Plausible settings page
- Extending the plugin with additional analytics features
- Troubleshooting Plausible tracking or settings issues

## Requirements

- PHP 8.2+
- Laravel 11.28+
- Filament 5.0
- `jeffersongoncalves/laravel-plausible` ^2.0
- `filament/spatie-laravel-settings-plugin` ^5.0

## Version Compatibility

| Filament | Branch | Package |
|----------|--------|---------|
| 5.x | `3.x` | `^3.0` |
| 4.x | `2.x` | `^2.0` |
| 3.x | `1.x` | `^1.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-plausible:"^3.0"
```

### Publish settings migrations

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=plausible-settings-migrations
php artisan migrate
```

## Configuration

### Register the Plugin

```php
use JeffersonGoncalves\Filament\Plausible\PlausiblePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PlausiblePlugin::make(),
        ]);
}
```

This automatically:
- Injects the Plausible Analytics tracking script into the panel `<head>` via `PanelsRenderHook::HEAD_START`
- Registers the `ManagePlausibleSettings` settings page

### Disable Settings Page

```php
PlausiblePlugin::make()
    ->settingsPage(false),
```

## Architecture

### Namespace

`JeffersonGoncalves\Filament\Plausible`

### Key Classes

#### PlausiblePlugin

```php
namespace JeffersonGoncalves\Filament\Plausible;

use Filament\Contracts\Plugin;
use Filament\Panel;

class PlausiblePlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    public static function make(): static;
    public static function get(): static;
    public function getId(): string;              // returns 'filament-plausible'
    public function register(Panel $panel): void;
    public function boot(Panel $panel): void;
    public function settingsPage(bool $condition = true): static;
}
```

#### PlausibleServiceProvider

```php
namespace JeffersonGoncalves\Filament\Plausible;

use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlausibleServiceProvider extends PackageServiceProvider
{
    // Registers the render hook for script injection
    // FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('plausible::script'));
}
```

#### ManagePlausibleSettings

```php
namespace JeffersonGoncalves\Filament\Plausible\Pages;

use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Plausible\Settings\PlausibleSettings;

class ManagePlausibleSettings extends SettingsPage
{
    protected static string $settings = PlausibleSettings::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';
}
```

### Settings Page Fields

The settings page provides a single section with two fields:

- **domains** -- `TextInput`, nullable, placeholder `example.com`. Comma-separated list of domains to track.
- **host_analytics** -- `TextInput`, URL-validated, required. The Plausible analytics host URL (default: `https://plausible.io` for cloud, or your self-hosted URL).

### Dependencies

- `jeffersongoncalves/laravel-plausible` -- Core Plausible Analytics integration providing `PlausibleSettings` model and the tracking script Blade view (`plausible::script`)
- `filament/spatie-laravel-settings-plugin` -- Filament integration for `spatie/laravel-settings`

## Self-Hosted Plausible

For self-hosted Plausible instances, set the `host_analytics` field to your custom URL:

1. Navigate to the Settings page in the admin panel
2. Set **Analytics Host URL** to your self-hosted Plausible URL (e.g., `https://analytics.yourdomain.com`)
3. Set **Domains** to the domain(s) you want to track

## Extending the Plugin

### Custom Settings Page

To override the default settings page:

```php
namespace App\Filament\Pages;

use JeffersonGoncalves\Filament\Plausible\Pages\ManagePlausibleSettings as BaseSettings;

class ManagePlausibleSettings extends BaseSettings
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                // Your custom schema here
            ]);
    }
}
```

Then disable the default and register your custom page in the panel provider.

### Adding Custom Plausible Events

The plugin handles base script injection. For custom events in your Blade views:

```html
<script>
    plausible('Signup', {props: {plan: 'premium'}});
</script>
```

## Troubleshooting

### Tracking script not loading
**Cause**: The `PlausibleServiceProvider` is not auto-discovered or the Plausible settings are not configured.
**Solution**: Ensure the package is installed and the service provider `JeffersonGoncalves\Filament\Plausible\PlausibleServiceProvider` is registered. Configure domains and host URL via the Settings page.

### Settings page not appearing
**Cause**: `settingsPage(false)` was called, or the settings migration was not run.
**Solution**: Verify `settingsPage()` is not set to `false`. Run both the spatie/laravel-settings base migration and the plausible-settings migration.

### Settings not persisting
**Cause**: The `settings` table does not exist.
**Solution**: Publish and run the spatie/laravel-settings base migration first: `php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations" && php artisan migrate`. Then run the plausible-specific migration.

### Script loads but no data in Plausible dashboard
**Cause**: The `domains` field does not match the domain configured in your Plausible account, or the `host_analytics` URL is incorrect.
**Solution**: Ensure the domain in settings matches exactly what is configured in your Plausible dashboard (cloud or self-hosted). Verify the host URL is accessible.

### Self-hosted Plausible not receiving data
**Cause**: The `host_analytics` URL is wrong or the self-hosted instance is not accessible.
**Solution**: Verify the URL points to your self-hosted Plausible instance and that it is publicly accessible from the browser. Check for CORS or SSL issues.
