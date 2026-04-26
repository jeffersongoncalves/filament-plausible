<div class="filament-hidden">

![Filament Plausible](https://raw.githubusercontent.com/jeffersongoncalves/filament-plausible/3.x/art/jeffersongoncalves-filament-plausible.png)

</div>

# Filament Plausible

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-plausible)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-plausible/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-plausible/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-plausible)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-plausible.svg?style=flat-square)](LICENSE.md)

A Filament plugin to integrate Plausible Analytics with a settings page to manage your tracking configuration. Privacy-friendly alternative to Google Analytics.

## Version Compatibility

| Filament | Branch | Package |
|----------|--------|---------|
| 5.x | `3.x` | `^3.0` |
| 4.x | `2.x` | `^2.0` |
| 3.x | `1.x` | `^1.0` |

## Requirements

- PHP 8.2 or higher
- Laravel 11.28 or higher
- Filament 5.x

## Installation

You can install the package via composer:

Install the package via Composer:

```bash
composer require jeffersongoncalves/filament-plausible:"^3.0"
```

Publish and run the settings migration from `spatie/laravel-settings` (if not already done):

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan migrate
```

Publish and run the Plausible settings migration:

```bash
php artisan vendor:publish --tag=plausible-settings-migrations
php artisan migrate
```

## Setup

Register the plugin in your `PanelProvider`:

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

## Usage

Once registered, the plugin provides:

1. **Automatic script injection** - The Plausible tracking script is automatically injected into the `<head>` of your Filament panel.
2. **Settings page** - A settings page is added to your panel where you can configure your Plausible domain(s) and host URL directly from the admin UI.

### Disabling the Settings Page

If you only want the automatic script injection without the settings page:

```php
PlausiblePlugin::make()
    ->settingsPage(false),
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Goncalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
