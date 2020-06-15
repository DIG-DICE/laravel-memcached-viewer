# Laravel Memcached Viewer

## Installation

```
composer require onecentlin/laravel-memcached-viewer
```

OR

Update `composer.json` in require section:

```json
"require": {
    "onecentlin/laravel-memcached-viewer": "*"
},
```

Run:
```
composer update
```

## Prerequisite

Update `config/app.php`

```php
'providers' => [
    ...
    DIGDICE\Memcached\ServiceProvider::class,
];
```

## Setup Access Permission

### Laravel 5.2 and above (Laravel 6 supported)

Setup for middleware group supported for Laravel 5.2 above

Modify `app/Http/Kernel.php` file with memcached-viewer in `$middlewareGroups` 

```php
protected $middlewareGroups = [
    ...
    'memcached-viewer' => [
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,

        // you may create customized middleware to fit your needs
        // example uses Laravel default authentication (default protection)
        \Illuminate\Auth\Middleware\Authenticate::class,
    ],
];
```
