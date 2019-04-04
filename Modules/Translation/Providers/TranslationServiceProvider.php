<?php

namespace Modules\Translation\Providers;

use Illuminate\Support\Carbon;
use Modules\Support\Traits\AddsAsset;
use Modules\Support\Traits\LoadsConfig;
use Modules\Translation\TranslationLoader;
use Illuminate\Translation\TranslationServiceProvider as IlluminateTranslationServiceProvider;

class TranslationServiceProvider extends IlluminateTranslationServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! config('app.installed')) {
            return;
        }

        $this->setupTranslatable();

        Carbon::setLocale(locale());

        $this->addAdminAssets('admin.translations.index', ['admin.translation.css', 'admin.translation.js']);
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

        parent::register();
    }

    /**
     * Setup translatable package specific configs.
     *
     * @return void
     */
    private function setupTranslatable()
    {
        $this->app['config']->set('translatable.use_fallback', true);
        $this->app['config']->set('translatable.fallback_locale', setting('default_locale'));
        $this->app['config']->set('translatable.locales', supported_locale_keys());
    }

    /**
     * Register the translation line loader.
     *
     * @return void
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', function ($app) {
            return new TranslationLoader($app['files'], $app['path.lang']);
        });
    }
}
