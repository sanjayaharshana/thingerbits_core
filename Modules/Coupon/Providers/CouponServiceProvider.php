<?php

namespace Modules\Coupon\Providers;

use Modules\Coupon\Admin\CouponTabs;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;

class CouponServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('coupons', CouponTabs::class);
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
