<?php

namespace BinaryCabin\LaravelBranding\Providers;

use Illuminate\Support\ServiceProvider;
use BinaryCabin\LaravelBranding\Branding;

class LaravelBrandingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Configuration/branding.php' => config_path('branding.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBranding();
    }

    public function registerBranding(){
        $this->app->bind('branding',function() {
            return new Branding();
        });
    }

    public function provides()
    {
        return array('branding', Branding::class);
    }



}