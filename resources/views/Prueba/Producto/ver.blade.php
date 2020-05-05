@extends('layouts.index')

@section('content')

{!! Form::model($ordenxxx) !!}
<div class="card text-left">
    <div class="card-header">
        <h1 style="text-align: center">
            <strong>Ver Producto</strong>
        </h1>
        <h1 style="text-align: center">
        <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        @include('Prueba.Producto.formulario')
    </div>
</div>
<h1 style="text-align: center">
    <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
</h1>
{!! Form::close() !!}
@endsection
