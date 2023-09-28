<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->isLocal()) {
            //if local register your services you require for development
            // $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        } else {
            //else register your services you require for production
            $this->app['request']->server->set('HTTPS', true);
        }
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if(env('APP_ENV') !== 'local') {
        //     $this->app['request']->server->set('HTTPS', env('FORCE_HTTPS_SCHEME'));
        // }
    }
}
