<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind Faker to the service container
        $this->app->singleton('Faker', function ($app) {
            return FakerFactory::create();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
