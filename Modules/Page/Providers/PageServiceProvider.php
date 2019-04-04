<?php

namespace Modules\Page\Providers;

use Modules\Page\Admin\PageTabs;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;

class PageServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('pages', PageTabs::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs('permissions.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
