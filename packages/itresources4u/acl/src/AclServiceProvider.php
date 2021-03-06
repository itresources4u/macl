<?php

namespace Itresources4u\Acl;

use Illuminate\Support\ServiceProvider;

class AclServiceProvider extends ServiceProvider
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
        $this->app->make("Itresources4u\Acl\RoleController");
        $this->loadViewsFrom(__DIR__.'/views', 'acl');
    }
}
