<?php

namespace Modules\Transaction\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;

class TransactionServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs(['permissions.php']);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
