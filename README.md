# Use GPT-3 inside Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/siteorigin/laravel-openai.svg?style=flat-square)](https://packagist.org/packages/siteorigin/laravel-openai)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/siteorigin/laravel-openai/run-tests?label=tests)](https://github.com/siteorigin/laravel-openai/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/siteorigin/laravel-openai/Check%20&%20fix%20styling?label=code%20style)](https://github.com/siteorigin/laravel-openai/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/siteorigin/laravel-openai.svg?style=flat-square)](https://packagist.org/packages/siteorigin/laravel-openai)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require siteorigin/laravel-openai
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Siteorigin\LaravelOpenAI\LaravelOpenAIServiceProvider" --tag="laravel-openai-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Siteorigin\LaravelOpenAI\LaravelOpenAIServiceProvider" --tag="laravel-openai-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-openai = new Siteorigin\LaravelOpenAI();
echo $laravel-openai->echoPhrase('Hello, Spatie!');
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

- [Greg Priday](https://github.com/.)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.