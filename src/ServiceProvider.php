<?php

namespace ErsinDemirtas\PolygonIO;

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

        $this->app->singleton(PolygonIO::class, function(){
            return new PolygonIO(config('laravel-polygonio.apiKey', ''));
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
