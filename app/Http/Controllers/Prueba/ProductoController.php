<?php

namespace App\Http\Controllers\Prueba;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoEliminarRequest;
use App\Mail\Notification;
use App\Prueba\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Prueba.Producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prueba.Producto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordenxxx=Producto::create($request->all());
        return redirect()->route('producto.editar',[$ordenxxx->id])->with('Producto guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $objetoxx)
    {
        return view('Prueba.Producto.ver', ['ordenxxx'=>$objetoxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $objetoxx)
    {
        return view('Prueba.Producto.editar', ['ordenxxx'=>$objetoxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $objetoxx)
    {
        $objetoxx->update($request->all());
        return redirect()->route('producto.editar',[$objetoxx->id])->with('Producto editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoEliminarRequest $request, Producto $objetoxx)
    {
        $objetoxx->delete();
        return redirect()->route('producto',[$objetoxx->id])->with('Producto eliminado con exito');
    }

    public function getBorrar(Producto $objetoxx)
    {
        return view('Prueba.Producto.eliminar', ['ordenxxx'=>$objetoxx]);
    }
}
