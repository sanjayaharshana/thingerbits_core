<?php

namespace Modules\Attribute\Providers;

use Modules\Product\Entities\Product;
use Modules\Attribute\Listeners\SaveProductAttributes;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Product::saving(SaveProductAttributes::class);
    }
}
