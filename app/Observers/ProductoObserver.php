<?php

namespace App\Observers;

use App\Prueba\Log;
use App\Prueba\Producto;
use Illuminate\Support\Facades\Auth;

class ProductoObserver
{
    private function _constructor(){

    }
    /**
     * Handle the producto "created" event.
     *
     * @param  \App\Prueba\Producto  $producto
     * @return void
     */
    public function created(Producto $producto)
    {
    	$log = [];
    	$log['datos'] = $producto;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the producto "updated" event.
     *
     * @param  \App\Prueba\Producto  $producto
     * @return void
     */
    public function updated(Producto $producto)
    {
    	$log = [];
    	$log['datos'] = $producto;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the producto "deleted" event.
     *
     * @param  \App\Prueba\Producto  $producto
     * @return void
     */
    public function deleted(Producto $producto)
    {
    	$log = [];
    	$log['datos'] = $producto;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	Log::create($log);
    }

    /**
     * Handle the producto "restored" event.
     *
     * @param  \App\Prueba\Producto  $producto
     * @return void
     */
    public function restored(Producto $producto)
    {
    	$log = [];
    	$log['datos'] = $producto;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	Log::create($log);
    }

    /**
     * Handle the producto "force deleted" event.
     *
     * @param  \App\Prueba\Producto  $producto
     * @return void
     */
    public function forceDeleted(Producto $producto)
    {
    	$log = [];
    	$log['datos'] = $producto;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	Log::create($log);
    }
}
