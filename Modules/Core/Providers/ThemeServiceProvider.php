<?php

namespace Modules\Core\Providers;

use FloatingPoint\Stylist\Theme\Json;
use FloatingPoint\Stylist\Theme\Theme;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
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

        $activeTheme = setting('active_theme');

        if (is_null($activeTheme)) {
            return;
        }

        $this->app['stylist']->activate($activeTheme);

        $this->bootTheme($this->app['stylist']->get($activeTheme));
    }

    /**
     * Boot the given theme.
     *
     * @param \FloatingPoint\Stylist\Theme\Theme $theme
     * @return void
     */
    private function bootTheme(Theme $theme)
    {
        $themeJson = new Json($theme->getPath());

        $providers = $themeJson->getJsonAttribute('providers') ?? [];
        $aliases = (array) $themeJson->getJsonAttribute('aliases') ?? [];
        $files = $themeJson->getJsonAttribute('files') ?? [];

        $this->registerLanguageNamespace($theme);
        $this->registerProviders($providers);
        $this->registerAliases($aliases);
        $this->registerFiles($theme->getPath(), $files);
    }

    /**
     * Register the language namespaces for the theme.
     *
     * @param \FloatingPoint\Stylist\Theme\Theme $theme
     */
    private function registerLanguageNamespace(Theme $theme)
    {
        $themeName = strtolower($theme->getName());

        $path = base_path("resources/lang/vendor/{$themeName}");

        if (is_dir($path)) {
            $this->loadTranslationsFrom($path, $themeName);
        }

        $this->loadTranslationsFrom("{$theme->getPath()}/resources/lang", $themeName);
    }

    /**
     * Register given service providers.
     *
     * @param array $providers
     * @return void
     */
    private function registerProviders($providers = [])
    {
        foreach ($providers as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Register given aliases.
     *
     * @param array $aliases
     * @return void
     */
    private function registerAliases($aliases = [])
    {
        foreach ($aliases as $alias => $class) {
            AliasLoader::getInstance()->alias($alias, $class);
        }
    }

    /**
     * Register given files.
     *
     * @param string $path
     * @param array $files
     * @return void
     */
    private function registerFiles($path, $files = [])
    {
        foreach ($files as $file) {
            require "{$path}/{$file}";
        }
    }
}
