# Signalert for Laravel

**Customisable & Extensible Notifications - Providing Alerts Exactly Where You Need Them**

The following Readme details how to install, integrate and use this package within your Laravel installation. For more information on how Signalert works, please visit the [Signalert site](http://danhanly.github.io/signalert/).

## Installation

Include this package within your project's `composer.json` file:

```json
{
    "require": {
        "signalert/laravel-package": "dev-master"
    }
}
```

Then run `composer update signalert/laravel-package`

## Integration

To integrate this package with your Laravel project, first add the Service Provider to your `config/app.php` file under the `providers` array:

```php
'providers' => [
    ...
    Signalert\ServiceProviders\SignalertServiceProvider::class,
];
```

Now add the Signalert Facade to your aliases, in the same file:

```php
'aliases' => [
    ...
    'Signalert' => Signalert\Facades\Signalert::class,
];
```

## Usage

Since this package works with Laravel Facades, you don't need to instantiate the object, as in the Signalert main package.

Signalert makes it simple to store messages:

```php
Signalert::store('Notification Name', 'homepage');
```

Signalert makes it simple to render messages:

```php
Signalert::render('homepage', 'error');
```

Signalert even makes it simple to retrieve messages as an array:

```php
Signalert::fetch('homepage', 'error');
```

## Customisation

Please refer to the [Signalert site](http://danhanly.github.io/signalert/), for more information on how to extend and customise the package.