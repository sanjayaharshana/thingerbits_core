<?php

namespace Modules\Coupon\Providers;

use Modules\Core\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Modules\Coupon\Http\Controllers';

    /**
     * Get public routes.
     *
     * @return string
     */
    protected function public()
    {
        return __DIR__ . '/../Routes/public.php';
    }

    /**
     * Get admin routes.
     *
     * @return string
     */
    protected function admin()
    {
        return __DIR__ . '/../Routes/admin.php';
    }
}
