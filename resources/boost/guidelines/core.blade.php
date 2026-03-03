## Filament Plausible

Filament plugin to integrate Plausible Analytics with a settings page to manage your tracking configuration. Privacy-friendly alternative to Google Analytics.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-plausible:"^3.0"
</code-snippet>
@endverbatim

After installing, publish and run the settings migrations:

@verbatim
<code-snippet name="Publish and run settings migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=plausible-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Plausible\PlausiblePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PlausiblePlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page (tracking script only)" lang="php">
PlausiblePlugin::make()
    ->settingsPage(false),
</code-snippet>
@endverbatim

### Features
- Automatic Plausible Analytics tracking script injection via `PanelsRenderHook::HEAD_START`
- Settings Page for managing Plausible domain(s) and host URL from the admin panel
- Configurable fields: domains (comma-separated) and analytics host URL
- Uses `spatie/laravel-settings` for persistent configuration
- Depends on `jeffersongoncalves/laravel-plausible` for core Plausible integration
- Privacy-friendly analytics (no cookies, GDPR-compliant by default)

### Architecture
- **Namespace**: `JeffersonGoncalves\Filament\Plausible`
- **Plugin class**: `PlausiblePlugin` implements `Filament\Contracts\Plugin`
- **Service Provider**: `PlausibleServiceProvider` extends `PackageServiceProvider`
- **Settings Page**: `Pages\ManagePlausibleSettings` extends `Filament\Pages\SettingsPage`
- **Settings Model**: `JeffersonGoncalves\Plausible\Settings\PlausibleSettings` (from laravel-plausible)

### Best Practices
- Always run both the spatie/laravel-settings base migration and the plausible-settings migration
- Use `settingsPage(false)` when you only need script injection without the admin UI
- Configure the domains and host URL via the Settings Page in the admin panel
- For self-hosted Plausible, set the `host_analytics` field to your custom analytics host URL
- The tracking script is injected at `HEAD_START` for all panel pages automatically
