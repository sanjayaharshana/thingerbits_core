<?php

namespace Modules\Core\Providers;

use Exception;
use Modules\Support\Locale;
use Nwidart\Modules\Module;
use Modules\Setting\Entities\Setting;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Setting\Repository as SettingRepository;
use Illuminate\Database\Eloquent\Factory as ModelFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CoreServiceProvider extends ServiceProvider
{
    use LoadsConfig;

    /**
     * Core module specific middleware.
     *
     * @var array
     */
    protected $middleware = [
        'auth' => \Modules\Core\Http\Middleware\Authenticate::class,
        'admin' => \Modules\Core\Http\Middleware\AdminMiddleware::class,
        'guest' => \Modules\Core\Http\Middleware\GuestMiddleware::class,
        'can' => \Modules\Core\Http\Middleware\Authorization::class,
        'localize' => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
        'locale_session_redirect' => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
        'localization_redirect' => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
    ];

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

        $this->setupSupportedLocales();
        $this->registerSetting();
        $this->setupAppLocale();
        $this->hideDefaultLocaleInURL();
        $this->setupAppTimezone();
        $this->setupMailConfig();
        $this->registerMiddleware();
        $this->registerInBackendState();
        $this->blacklistAdminRoutesOnFrontend();
        $this->registerModelFactories();
        $this->registerModuleResourceNamespaces();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs('config.php');
    }

    /**
     * Setup supported locales.
     *
     * @return void
     */
    private function setupSupportedLocales()
    {
        $supportedLocales = [];

        foreach ($this->getSupportedLocales() as $locale) {
            $supportedLocales[$locale]['name'] = Locale::name($locale);
        }

        $this->app['config']->set('laravellocalization.supportedLocales', $supportedLocales);
    }

    /**
     * Get supported locales from database.
     *
     * @return array
     */
    private function getSupportedLocales()
    {
        try {
            return Setting::get('supported_locales', [config('app.locale')]);
        } catch (Exception $e) {
            return [config('app.locale')];
        }
    }

    /**
     * Hide default locale in url for non multi-locale mode.
     *
     * @return void
     */
    private function hideDefaultLocaleInURL()
    {
        if (! is_multilingual()) {
            $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        }
    }

    /**
     * Register setting binding.
     *
     * @return void
     */
    private function registerSetting()
    {
        $this->app->singleton('setting', function () {
            return new SettingRepository(Setting::allCached());
        });
    }

    /**
     * Setup application locale.
     *
     * @return string
     */
    private function setupAppLocale()
    {
        $this->app['config']->set('app.locale', $defaultLocale = Setting::get('default_locale'));
        $this->app['config']->set('app.fallback_locale', $defaultLocale);

        if ($this->app['request']->segment(1) === 'admin') {
            return LaravelLocalization::setLocale($defaultLocale);
        }

        return LaravelLocalization::setLocale();
    }

    /**
     * Setup application timezone.
     *
     * @return void
     */
    private function setupAppTimezone()
    {
        $timezone = setting('default_timezone') ?? config('app.timezone');

        date_default_timezone_set($timezone);

        $this->app['config']->set('app.timezone', $timezone);
    }

    /**
     * Setup application mail config.
     *
     * @return void
     */
    private function setupMailConfig()
    {
        $this->app['config']->set('mail.driver', 'smtp');
        $this->app['config']->set('mail.from.address', setting('mail_from_address'));
        $this->app['config']->set('mail.from.name', setting('mail_from_name'));
        $this->app['config']->set('mail.host', setting('mail_host'));
        $this->app['config']->set('mail.port', setting('mail_port'));
        $this->app['config']->set('mail.username', setting('mail_username'));
        $this->app['config']->set('mail.password', setting('mail_password'));
    }

    /**
     * Register the filters.
     *
     * @return void
     */
    private function registerMiddleware()
    {
        foreach ($this->middleware as $name => $middleware) {
            $this->app['router']->aliasMiddleware($name, $middleware);
        }
    }

    /**
     * Register inBackend state to the IoC container.
     *
     * @return void
     */
    private function registerInBackendState()
    {
        if ($this->app->runningInConsole()) {
            return $this->app['inBackend'] = false;
        }

        $index = in_array($this->app['request']->segment(1), setting('supported_locales'))
            ? 2
            : 1;

        $this->app['inBackend'] = $this->app['request']->segment($index) === 'admin';
    }

    /**
     * Blacklist admin routes on frontend for ziggy package.
     *
     * @return void
     */
    private function blacklistAdminRoutesOnFrontend()
    {
        if (! $this->app['inBackend'] && $this->app->configurationIsCached()) {
            $this->app['config']->set('ziggy.blacklist', ['admin.*']);
        }
    }

    /**
     * Register model factories of all modules.
     *
     * @return void
     */
    private function registerModelFactories()
    {
        foreach ($this->app['modules']->allEnabled() as $module) {
            $dir = "{$module->getPath()}/Database/Factories";

            if (is_dir($dir)) {
                $this->app[ModelFactory::class]->load($dir);
            }
        }
    }

    /**
     * Register the modules aliases.
     *
     * @return void
     */
    private function registerModuleResourceNamespaces()
    {
        foreach ($this->app['modules']->allEnabled() as $module) {
            $this->registerViewNamespace($module);
            $this->registerLanguageNamespace($module);
        }
    }

    /**
     * Register the view namespaces for the modules.
     *
     * @param \Nwidart\Modules\Module $module
     */
    private function registerViewNamespace(Module $module)
    {
        $this->loadViewsFrom("{$module->getPath()}/Resources/views", $module->getLowerName());
    }

    /**
     * Register the language namespaces for the modules.
     *
     * @param \Nwidart\Modules\Module $module
     */
    private function registerLanguageNamespace(Module $module)
    {
        $langDir = base_path("resources/lang/vendor/{$module->getLowerName()}");

        if (is_dir($langDir)) {
            $this->loadTranslationsFrom($langDir, $module->getLowerName());
        }

        $this->loadTranslationsFrom("{$module->getPath()}/Resources/lang", $module->getLowerName());
    }
}
