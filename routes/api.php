<?php

use App\Prueba\Orden;   
use App\Prueba\OrdenProducto;
use App\Prueba\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mailgun\Mailgun;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register', 'Auth/RegisterController@showRegistrationForm')->name('register');

Route::get('prueba/orden', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(
            Orden::select(
                'id',
                'nombre',
                'direccion',
                'telefono',
                'email',
                'valfinal'
            )
        )
        ->addColumn('botonexx', 'Prueba/Orden/acciones/acciones')
        ->rawColumns(['botonexx'])
        ->toJson();
});

Route::get('prueba/producto', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(
            Producto::select(
                'id',
                'nombre',
                'descrip',
                'valor'
            )
        )
        ->addColumn('botonexx', 'Prueba/Producto/acciones/acciones')
        ->rawColumns(['botonexx'])
        ->toJson();
});
