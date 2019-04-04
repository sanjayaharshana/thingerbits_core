<?php

namespace Modules\Cart\Providers;

use Modules\Cart\Cart;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Cart\Http\Middleware\CheckCartStock;
use Modules\Cart\Http\Middleware\CheckCouponUsageLimit;
use Modules\Cart\Http\Middleware\CheckProductIsInStock;
use Modules\Cart\Http\Middleware\RedirectIfCartIsEmpty;

class CartServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Array of checkout module specific middleware.
     *
     * @var array
     */
    private $middleware = [
        'in_stock' => CheckProductIsInStock::class,
        'check_stock' => CheckCartStock::class,
        'cart_not_empty' => RedirectIfCartIsEmpty::class,
        'check_coupon_usage_limit' => CheckCouponUsageLimit::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->middleware as $name => $middleware) {
            $this->app['router']->aliasMiddleware($name, $middleware);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs('config.php');

        $this->app->singleton(Cart::class, function ($app) {
            return new Cart(
                $app['session'],
                $app['events'],
                'cart',
                session()->getId(),
                config('modules.cart.config')
            );
        });

        $this->app->alias(Cart::class, 'cart');
    }
}
