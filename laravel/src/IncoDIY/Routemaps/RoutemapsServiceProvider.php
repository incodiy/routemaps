<?php

namespace IncoDIY\Routemaps;

use Illuminate\Support\ServiceProvider;

class RoutemapsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        ->publishes([
            __DIR__.'/../../config/routemaps.php' => config_path('routemaps.php'),
        ], 'config');
        
        ->loadRoutesFrom(__DIR__.'/../../routes/api.php');
    }
    
    public function register()
    {
        ->mergeConfigFrom(
            __DIR__.'/../../config/routemaps.php', 'routemaps'
        );
    }
}
