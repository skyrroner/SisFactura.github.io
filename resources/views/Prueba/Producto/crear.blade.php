@extends('layouts.index')

@section('content')
<div class="card text-left">
    <div class="card-header">
        <h1 style="text-align: center"><strong>Crear Producto</strong>
            <form method="POST" id="formulario" action="{{route('producto.crear')}}">
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        @csrf
        @include('Prueba.Producto.formulario')
        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route("producto") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
</div>
{!!Form::close()!!}
@endsection
