<?php

namespace Themes\Storefront\Providers;

use Illuminate\Support\Facades\View;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;
use Themes\Storefront\Admin\StorefrontTabs;
use Themes\Storefront\Http\ViewComposers\LayoutComposer;
use Themes\Storefront\Http\ViewComposers\HomePageComposer;
use Themes\Storefront\Http\ViewComposers\ProductsFilterComposer;

class StorefrontServiceProvider extends ServiceProvider
{
    use LoadsConfig, AddsAsset;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        TabManager::register('storefront', StorefrontTabs::class);

        View::composer('public.layout', LayoutComposer::class);
        View::composer('public.home.index', HomePageComposer::class);
        View::composer('public.products.partials.filter', ProductsFilterComposer::class);

        $this->addAdminAssets('admin.storefront.settings.edit', [
            'admin.storefront.css', 'admin.media.css', 'admin.storefront.js', 'admin.media.js',
        ]);
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
