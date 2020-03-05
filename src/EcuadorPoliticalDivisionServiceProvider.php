<?php

namespace Fasuto\Ecuador\PoliticalDivision;

use Illuminate\Support\ServiceProvider;

class EcuadorPoliticalDivisionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->publishes([
            __DIR__.'/SEEDS' => public_path('database/seeds'),
        ], 'public');
    }
}
