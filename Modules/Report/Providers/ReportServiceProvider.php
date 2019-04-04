<?php

namespace Modules\Report\Providers;

use Illuminate\Support\Facades\View;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class ReportServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('report::admin.reports.*', function ($view) {
            $view->with('request', $this->app['request']);
        });

        $this->addAdminAssets('admin.reports.index', ['admin.report.css', 'admin.report.js']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs(['assets.php', 'permissions.php']);
    }
}
