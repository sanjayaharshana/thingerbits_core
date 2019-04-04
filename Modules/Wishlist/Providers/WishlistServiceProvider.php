<?php

namespace Modules\Wishlist\Providers;

use Illuminate\Support\ServiceProvider;

class WishlistServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
