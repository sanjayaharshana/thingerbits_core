<?php

namespace Modules\Compare\Providers;

use Modules\Compare\Compare;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class CompareServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs('config.php');

        $this->app->singleton(Compare::class, function ($app) {
            return new Compare(
                $app['session'],
                $app['events'],
                'compare',
                session()->getId() . '_compare',
                config('modules.compare.config')
            );
        });

        $this->app->alias(Compare::class, 'compare');
    }
}
