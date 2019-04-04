<?php

namespace Modules\Core\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

abstract class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::group([
            'namespace' => $this->namespace,
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localize', 'locale_session_redirect', 'localization_redirect', 'web'],
        ], function (Router $router) {
            $this->adminRoutes();
            $this->publicRoutes();
        });
    }

    /**
     * Define the admin routes.
     *
     * @return void
     */
    private function adminRoutes()
    {
        if (! method_exists($this, 'admin')) {
            return;
        }

        Route::group([
            'namespace' => 'Admin',
            'prefix' => 'admin',
            'middleware' => ['admin'],
        ], function () {
            require $this->admin();
        });
    }

    /**
     * Define the public routes.
     *
     * @return void
     */
    private function publicRoutes()
    {
        if (method_exists($this, 'public')) {
            require $this->public();
        }
    }
}
