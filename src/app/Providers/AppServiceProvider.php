<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Swapi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Swapi::class, fn () => new Swapi());

        // Binder dans le container : version courte
        // app(Swapi::class);  
        // !!!!!!!!!!!!! Switch avec la version
        //  courte pour tester ce que tu voulais essayer !!
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
