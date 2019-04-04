<?php

namespace Modules\Support\Traits;

trait LoadsConfig
{
    /**
     * Load the given configuration files.
     *
     * @param string|array $paths
     * @param void
     */
    public function loadConfigs($paths)
    {
        if (app()->configurationIsCached()) {
            return;
        }

        foreach (array_wrap($paths) as $path) {
            if ($this->loadingForModule()) {
                $this->mergeModuleConfig($path);

                continue;
            }

            $this->mergeThemeConfig($path);
        }
    }

    /**
     * Determine if loading config for module.
     *
     * @return void
     */
    private function loadingForModule()
    {
        return strtok(get_called_class(), '\\') === 'Modules';
    }

    /**
     * Merge the given config for the module.
     *
     * @param string $path
     * @return void
     */
    private function mergeModuleConfig($path)
    {
        $module = strtolower($this->componentName());
        $filename = pathinfo($path, PATHINFO_FILENAME);

        $this->mergeConfigFrom(
            $this->getModuleConfigFilePath($path),
            "fleetcart.module.{$module}.{$filename}"
        );
    }

    /**
     * Get config file path for the module.
     *
     * @param string $path
     * @return string
     */
    private function getModuleConfigFilePath($path)
    {
        $modulePath = base_path("Modules/{$this->componentName()}");

        return "{$modulePath}/Config/{$path}";
    }

    /**
     * Get the Module/Theme name.
     *
     * @return string
     */
    private function componentName()
    {
        return explode('\\', get_called_class())[1];
    }

    /**
     * Merge the given config for the theme.
     *
     * @param string $path
     * @return void
     */
    private function mergeThemeConfig($path)
    {
        $theme = strtolower($this->componentName());
        $filename = pathinfo($path, PATHINFO_FILENAME);

        $this->mergeConfigFrom(
            $this->getThemeConfigFilePath($path),
            "fleetcart.theme.{$theme}.{$filename}"
        );
    }

    /**
     * Get config file path for the theme.
     *
     * @param string $path
     * @return string
     */
    private function getThemeConfigFilePath($path)
    {
        $themePath = base_path("Themes/{$this->componentName()}");

        return "{$themePath}/config/{$path}";
    }
}
