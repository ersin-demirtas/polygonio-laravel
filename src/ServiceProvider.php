<?php

namespace ErsinDemirtas\PolygonIO;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use PolygonIO\Rest\Rest;

/**
 * Class ServiceProvider
 *
 * @package ErsinDemirtas\PolygonIO
 */
class ServiceProvider extends LaravelServiceProvider
{

    public function register()
    {
        parent::register();

        $this->app->singleton(Rest::class, function(){
            return new Rest('API_KEY');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/laravel-polygonio.php' => config_path('laravel-polygonio.php'),
        ]);
    }
}
