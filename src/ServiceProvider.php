<?php

namespace DIGDICE\MemcachedViewer;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    protected $namespace = 'DIGDICE\MemcachedViewer\Http\Controllers';

    public function boot(Router $router)
    {
        $this->map($router);
    }

    protected function map($router)
    {
        if ($this->app->routesAreCached() === false) {
            $prefix = 'memcached-viewer';
            $group = $router->group([
                'namespace' => $this->namespace,
                'as' => 'memcached-viewer::',
                'prefix' => $prefix,
            ], function () {
                require __DIR__.'/Http/routes.php';
            });
        }
    }

    public function register()
    {
    }
}
