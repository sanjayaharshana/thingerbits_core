<?php

namespace Modules\Media\Providers;

use Illuminate\Support\Facades\View;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Http\ViewComposers\AssetsComposer;

class MediaServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('media::admin.file_manager.index', AssetsComposer::class);

        $this->addAdminAssets('admin.(media|file_manager).(index|edit)', ['admin.media.css', 'admin.media.js']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs(['assets.php', 'permissions.php']);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
