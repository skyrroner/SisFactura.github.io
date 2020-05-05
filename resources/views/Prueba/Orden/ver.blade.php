@extends('layouts.index')

@section('content')

{!! Form::model($ordenxxx) !!}
<div class="card text-left" style="width: 96%; margin-left: auto; margin-right: auto;">
    <div class="card-header">
        <h1 style="text-align: center">
            <strong>Ver Orden</strong>
        </h1>
        <h1 style="text-align: center">
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Cabecera</h5>
        @include('Prueba.Orden.formulario')
        <br><br>
        <form method="POST" id="detalle" action="{{route('orden.detalle', $ordenxxx->id)}}">
            {{ csrf_field() }}
        <h5 class="card-title">Detalle</h5>
        @include('Prueba.Orden.form_editar')
            </div>
        <h1 style="text-align: center">
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
            <a href="{{ route("orden.pdf",$ordenxxx) }}" class="btn btn-primary">Pdf</a>
        </h1>
    </div>
</div>
{!! Form::close() !!}
@endsection
