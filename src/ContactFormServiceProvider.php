<?php

namespace Nharavel\Contactform;

use Illuminate\Support\ServiceProvider;


class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','contactform');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations','contactform');
    }
}
