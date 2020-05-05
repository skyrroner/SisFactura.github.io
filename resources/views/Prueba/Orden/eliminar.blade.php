@extends('layouts.index')

@section('content')
{!! Form::model($ordenxxx,['route'=>['orden.eliminar',$ordenxxx->id],'method'=>'delete']) !!}
<div class="card text-left" style="width: 96%; margin-left: auto; margin-right: auto;">
    <div class="card-header">
        <h1 style="text-align: center">
            <strong>Eliminar Orden</strong>
        </h1>
    </div>
    <div>
        <h4 style="text-align: center">
            <br>¿Desea eliminar la orden?
        </h4>
        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
</div>
{!! Form::close() !!}
@endsection
