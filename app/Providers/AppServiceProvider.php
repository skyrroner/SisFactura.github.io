<?php

namespace App\Providers;

use App\Observers\OrdenObserver;
use App\Observers\ProductoObserver;
use App\Prueba\Orden;
use App\Prueba\Producto;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Orden::observe(OrdenObserver::class);
        Producto::observe(ProductoObserver::class);
    }
}
