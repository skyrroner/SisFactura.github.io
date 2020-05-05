<?php

namespace App\Http\Controllers\Prueba;


use App\Http\Controllers\Controller;
use App\Http\Requests\OrdenEliminarRequest;
use App\Mail\Notification;
use App\Prueba\Orden;
use App\Prueba\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Mpdf\HTMLParserMode;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Prueba.Orden.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prueba.Orden.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordenxxx = Orden::create($request->all());
        $asunto = 'Nueva Orden';
        $para = $request->email;
        Mail::send(
            'mail',

            $request->all(),
            function ($mensaje) use ($asunto, $para) {
                $mensaje->from('skyrroner@gmail.com', 'Prueba');
                $mensaje->subject($asunto);
                $mensaje->to($para);
            },
            new Notification,
            $request
        );
        return redirect()->route('orden.editar', [$ordenxxx->id])->with('Orden guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $objetoxx)
    {
        $detalle = false;
        return view('Prueba.Orden.ver', ['ordenxxx' => $objetoxx, 'detalle' => $detalle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $objetoxx)
    {
        $detalle = true;
        $producto = Orden::getProductos(['cabecera' => true, 'ajaxxxxx' => false]);
        return view('Prueba.Orden.editar', ['ordenxxx' => $objetoxx, 'producto' => $producto, 'detalle' => $detalle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $objetoxx)
    {
        $objetoxx->update($request->all());
        return redirect()->route('orden.editar', [$objetoxx->id])->with('Orden editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenEliminarRequest $request, Orden $objetoxx)
    {
        $objetoxx->delete();
        return redirect()->route('orden', [$objetoxx->id])->with('Orden eliminado con exito');
    }

    public function getBorrar(Orden $objetoxx)
    {
        return view('Prueba.Orden.eliminar', ['ordenxxx' => $objetoxx]);
    }
    public function pdf(Request $request, $objetoxx)
    {
        $ordenxxx = Orden::find($objetoxx);
        $producto = Producto::find($ordenxxx->productos);
        $file = view('Prueba.Orden.pdf', ['ordenxxx' => $ordenxxx,'producto' => $producto,]);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(file_get_contents('css/styl.css'), \Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($file);
        $mpdf->Output();
    }
    /**
     * Este método se encarga de guardar el detalle
     * @param:$request Parámetro que contiene la información que se ingresó del prodicto seleccionado
     * @param:$objetoxx ID de la cabecera (orden)
     */
    public function detalle(Request $request, $objetoxx)
    {
        $ordenxxx = Orden::find($objetoxx); //Encontrar la orden a la que se le va a asignar el producto(detalle)
        $producto = Producto::find($request->producto_id); //Encontrar el producto que se le asigna a la orden
        $ordenxxx
            ->productos() //Acceder al rompimiento entre el prducto y la orden
            ->attach([ //Asignar el producto a la orden
                $request->producto_id //Producto que se va a asociar con la orden
                => [
                    'cantidad' => $request->cantidad, //Cantidad del producto seleccionado
                    'total' => $producto->valor * $request->cantidad, //Valor total del producto seleccionado
                ],
            ]);
        $suma = 0;
        foreach ($ordenxxx->productos as $producto) {
            $suma += $producto->pivot->total;
        }
        $valtotal=$suma/1.19;
        $datosxxx = ['valtotal' => $valtotal, 'valimpuesto' => $suma-$valtotal, 'valfinal' => $suma];
        $ordenxxx->update($datosxxx);
        //Redirecciona a editar orden con los datos del producto
        return redirect()->route('orden.editar', [$objetoxx]);
    }
    public function detalleBorrar(Orden $objetoxx, $producto)
    {

        $producto = Producto::find($producto)->ordens()->select('total')->where('ordens.id', $objetoxx->id)->first();
        $objetoxx->productos()->detach($producto->id);
        $nuetotal = $objetoxx->valfinal - $producto->total;
        $valtotal = $nuetotal / 1.19;
        $datosxxx = ['valtotal' =>$valtotal, 'valimpuesto' => ($nuetotal - $valtotal), 'valfinal' => $nuetotal];
        $objetoxx->update($datosxxx);

        return redirect()->route('orden.editar', [$objetoxx->id])->with('Orden guardado con exito');
    }
}
