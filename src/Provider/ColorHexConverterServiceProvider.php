<?php

namespace Aboodma\ColorHexConvert\Provider;

use Illuminate\Support\ServiceProvider;

class ColorHexConverterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {


        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('colorcodeconverter.php'),
            ], 'config');


        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'colorhexconverter');

        // Register the main class to use with the facade
        $this->app->singleton('colorHexConverter', function () {
            return new ColorHexConverter;
        });
    }
}