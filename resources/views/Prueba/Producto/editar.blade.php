@extends('layouts.index')

@section('content')

{!! Form::model($ordenxxx,['route'=>['producto.editar',$ordenxxx->id],'method'=>'PUT']) !!}
<div class="card text-left">
    <div class="card-header">
        <h1 style="text-align: center"><strong>Editar Producto</strong>
        </h1>
        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        @include('Prueba.Producto.formulario')

        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
</div>

{!! Form::close() !!}
@endsection
