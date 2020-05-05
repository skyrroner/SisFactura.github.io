<?php

namespace App\Observers;

use App\Prueba\Log;
use App\Prueba\Orden;
use Illuminate\Support\Facades\Auth;

class OrdenObserver
{
    /**
     * Handle the orden "created" event.
     *
     * @param  \App\Orden  $orden
     * @return void
     */
    public function created(Orden $orden)
    {
    	$log = [];
    	$log['datos'] = $orden;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the orden "updated" event.
     *
     * @param  \App\Orden  $orden
     * @return void
     */
    public function updated(Orden $orden)
    {
    	$log = [];
    	$log['datos'] = $orden;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the orden "deleted" event.
     *
     * @param  \App\Orden  $orden
     * @return void
     */
    public function deleted(Orden $orden)
    {
    	$log = [];
    	$log['datos'] = $orden;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the orden "restored" event.
     *
     * @param  \App\Orden  $orden
     * @return void
     */
    public function restored(Orden $orden)
    {
    	$log = [];
    	$log['datos'] = $orden;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }

    /**
     * Handle the orden "force deleted" event.
     *
     * @param  \App\Orden  $orden
     * @return void
     */
    public function forceDeleted(Orden $orden)
    {
    	$log = [];
    	$log['datos'] = $orden;
    	$log['url'] = request()->fullUrl();
    	$log['metodo'] = request()->method();
    	$log['ip'] = request()->ip();
    	$log['user_id'] = Auth::user()->id;
    	Log::create($log);
    }
}
