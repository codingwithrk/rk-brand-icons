<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkBrandIcons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class IconServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views from the specified directory with the namespace 'rk-icons'
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rk-icons');

        // Register the Blade component
        Blade::component('rk-icons::icon', Icon::class);
    }

    public function register()
    {
        // Register the RkIconFactory service
        $this->app->singleton('rk-icon', function($app) {
            return new RkIconFactory();
        });
    }
}