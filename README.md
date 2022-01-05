# Laravel Sweet Regan

## Installation

To summon Sweet Regan, add the following middleware to your web group:

```php
protected $middlewareGroups = [
    'web' => [
        \Jezzdk\LaravelSweetRegan\Http\Middleware\SweetRegan::class,
    ],
];
```

You may publish the config file and view with:

```
php artisan vendor:publish --provider="Jezzdk\LaravelSweetRegan\SweetReganServiceProvider"
```

## Configuration

The default config looks like this:

```php
return [
    // How often do you want Regan to visit your site?
    'chance' => '1:10',

    // How long do you want Regan to stay on your site? (in seconds)
    'visit_length' => 2,
];
```
