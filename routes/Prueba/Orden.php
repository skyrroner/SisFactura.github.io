<?php
Route::group(['prefix' => 'ordenes'], function () {

    Route::get('', [
        'uses' => 'Prueba\OrdenController@index',
    ])->name('orden');
    Route::get('nuevo', [
        'uses' => 'Prueba\OrdenController@create',
    ])->name('orden.nuevo');
    Route::post('nuevo', [
        'uses' => 'Prueba\OrdenController@store',
    ])->name('orden.crear');
    Route::get('editar/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@edit',
    ])->name('orden.editar');
    Route::put('editar/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@update',
    ])->name('orden.editar');
    Route::get('ver/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@show',
    ])->name('orden.ver');
    Route::delete('eliminar/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@destroy',
    ])->name('orden.borrar');
    Route::get('eliminar/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@getBorrar',
    ])->name('orden.eliminar');
    Route::get('pdf/{objetoxxx}', [
        'uses' => 'Prueba\OrdenController@pdf',
    ])->name('orden.pdf');
    Route::post('detalle/{objetoxx}', [
        'uses' => 'Prueba\OrdenController@detalle',
    ])->name('orden.detalle');
    Route::get('detalleeliminar/{objetoxx}/{producto}', [
        'uses' => 'Prueba\OrdenController@detalleBorrar',
    ])->name('orden.detalle.eliminar');
});
