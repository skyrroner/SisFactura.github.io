@extends('layouts.index')

@section('content')

<form method="POST" id="formulario" action="{{route('orden.crear')}}">
<div class="card text-left" style="width: 96%; margin-left: auto; margin-right: auto;">
    <div class="card-header">
        <h1 style="text-align: center"><strong>Crear Orden</strong>
        </h1>
        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">

        <h5 class="card-title">Cabecera</h5>
        <br>
        @csrf
        @include('Prueba.Orden.formulario')

        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
        </h1>

    </div>
</div>
{!!Form::close()!!}
@endsection
