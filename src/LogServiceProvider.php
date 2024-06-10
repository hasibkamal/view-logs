<?php

namespace HasibKamal\ViewLog;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if (method_exists($this, 'loadViewsFrom')) {
            $this->loadViewsFrom(__DIR__ . '/views', 'view-logs');
        }

        if (method_exists($this, 'publishes')) {
            $this->publishes([
                __DIR__ . '/views' => base_path('/resources/views/vendor/view-logs'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('HasibKamal\ViewLog\ViewLogController');
    }
}
