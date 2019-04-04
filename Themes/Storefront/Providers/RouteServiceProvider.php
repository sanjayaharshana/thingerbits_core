<?php

namespace Themes\Storefront\Providers;

use Modules\Core\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'Themes\Storefront\Http\Controllers';

    /**
     * Get public routes.
     *
     * @return string
     */
    protected function public()
    {
        return __DIR__ . '/../routes/public.php';
    }

    /**
     * Get admin routes.
     *
     * @return string
     */
    protected function admin()
    {
        return __DIR__ . '/../routes/admin.php';
    }
}
