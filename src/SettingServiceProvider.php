<?php

namespace Kcdev\Setting;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Kcdev\Setting\Commands\SettingSetCommand;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        App::singleton('setting', Setting::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        if (App::runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'migrations');

            $this->commands([
                SettingSetCommand::class,
            ]);
        }
    }
}
