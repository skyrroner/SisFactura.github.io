<?php
Route::group(['prefix' => 'productos'], function (){

        Route::get('', [
            'uses' => 'Prueba\ProductoController@index',
        ])->name('producto');
        Route::get('nuevo', [
            'uses' => 'Prueba\ProductoController@create',
        ])->name('producto.nuevo');
        Route::post('nuevo', [
            'uses' => 'Prueba\ProductoController@store',
        ])->name('producto.crear');
        Route::get('editar/{objetoxx}', [
            'uses' => 'Prueba\ProductoController@edit',
        ])->name('producto.editar');
        Route::put('editar/{objetoxx}', [
            'uses' => 'Prueba\ProductoController@update',
        ])->name('producto.editar');
        Route::get('ver/{objetoxx}', [
            'uses' => 'Prueba\ProductoController@show',
        ])->name('producto.ver');
        Route::delete('eliminar/{objetoxx}', [
            'uses' => 'Prueba\ProductoController@destroy',
        ])->name('producto.borrar');
        Route::get('eliminar/{objetoxx}', [
            'uses' => 'Prueba\ProductoController@getBorrar',
        ])->name('producto.eliminar');
    });
