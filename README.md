# This is a Wrapper for SMS Service of TextLocal.in

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rudolphp/laravel-textlocal.svg?style=flat-square)](https://packagist.org/packages/rudolphp/laravel-textlocal)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rudolphp/laravel-textlocal/run-tests?label=tests)](https://github.com/rudolphp/laravel-textlocal/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rudolphp/laravel-textlocal/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/rudolphp/laravel-textlocal/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rudolphp/laravel-textlocal.svg?style=flat-square)](https://packagist.org/packages/rudolphp/laravel-textlocal)

Laravel Package to Integrate TextLocal.in SMS.

## Installation

You can install the package via composer:

```bash
composer require rudolphp/laravel-textlocal
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="textlocal-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="textlocal-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="textlocal-views"
```

## Usage

```php
$sms = new LaravelTextlocal();

// sender, optional
$sms->send('message', 'mobile number','sender');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

 ### Documentation
 https://api.textlocal.in/docs/phpclass

### If you liked this package!
<a href="https://www.buymeacoffee.com/rudolphp" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 200px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>
