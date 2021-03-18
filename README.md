# Laravel package for Multi-Step Lead Generation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/roberts/leads.svg?style=flat-square)](https://packagist.org/packages/roberts/leads)
![Tests](https://github.com/roberts/leads/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/roberts/leads.svg?style=flat-square)](https://packagist.org/packages/roberts/leads)

This is where your description should go.

## Installation

You can install the package via composer:

```bash
composer require roberts/leads
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Roberts\Leads\LeadsServiceProvider" --tag="leads-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Drew Roberts](https://github.com/drewroberts)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
