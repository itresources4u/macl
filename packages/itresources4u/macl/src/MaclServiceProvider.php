<?php

namespace Itresources4u\Macl;

use Illuminate\Support\ServiceProvider;

class MaclServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Itresources4u\Macl\RoleController');
        $this->loadViewsFrom(__DIR__.'/views', 'macl');
    }
}
