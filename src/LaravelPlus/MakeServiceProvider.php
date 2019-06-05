<?php

namespace LaravelPlus\Make;

use LaravelPlus\Make\Commands\Framework;

class InfyOmGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        $configPath = __DIR__.'/../config/config.php';

        /*$this->publishes([
            $configPath => config_path('/.php'),
        ]);*/
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('make.framework', function ($app) {
            return new Framework($app);
        });

        $this->commands([
            'make.framework',
        ]);
    }
}
