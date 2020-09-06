<?php

namespace ErsinDemirtas\PolygonIO;

use ErsinDemirtas\PolygonIO\Rest\Rest;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

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
            return new Rest(config('laravel-polygonio.apiKey', ''));
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
            __DIR__ . '/../config/laravel-polygonio.php' => config_path('laravel-polygonio.php'),
        ]);
    }
}
