<div class="filament-hidden">

![Filament Plausible](https://raw.githubusercontent.com/jeffersongoncalves/filament-plausible/master/art/jeffersongoncalves-filament-plausible.png)

</div>

# Filament Plausible

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-plausible)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-plausible/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-plausible/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-plausible)

A lightweight Filament package that seamlessly integrates Plausible Analytics into your filament panel. Plausible.io is a privacy-friendly, open-source alternative to Google Analytics.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-plausible
```

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=plausible-config
```

Add head template.

```php
@include('plausible::script')
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
