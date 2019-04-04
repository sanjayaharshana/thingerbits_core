<?php

namespace Modules\Support\Providers;

use Modules\Core\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'Modules\Support\Http\Controllers';

    /**
     * Get public routes.
     *
     * @return string
     */
    protected function public()
    {
        return __DIR__ . '/../Routes/public.php';
    }
}
