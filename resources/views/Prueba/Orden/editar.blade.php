@extends('layouts.index')

@section('content')

{!! Form::model($ordenxxx,['route'=>['orden.editar',$ordenxxx->id],'method'=>'PUT']) !!}
<div class="card text-left" style="width: 96%; margin-left: auto; margin-right: auto;">
    <div class="card-header">
        <h1 style="text-align: center">
            <strong>Editar Orden</strong>
        </h1>
        <h1 style="text-align: center">
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
        </h1>
    </div>
    <div class="card-body">

        <h5 class="card-title">Cabecera</h5>
        <br>
        @include('Prueba.Orden.formulario')
        <br><br>
        <br><br>
    </div>
    {!! Form::close() !!}

    <div class="card" style="width: 96%; margin-left: auto; margin-right: auto;">
        <h5 class="card-header" data-toggle="collapse" data-target="#detalle" data-widget="treeview">
            <a href="#detalle" class="nav-link">
                Detalle
                <i class="fas fa-angle-left right"></i>
            </a>
        </h5>
        <div class="card-body collapse" id="detalle">
            <form method="POST" id="detalle" action="{{route('orden.detalle', $ordenxxx->id)}}">
                {{ csrf_field() }}
                <div class="form-row" style="margin-left: auto; margin-right: auto;">
                    <div class="form-group col-md-3" style="margin-left: auto; margin-right: auto;">
                        <label for="producto_id">Producto:</label>
                        {{ Form::select('producto_id',$producto , 'null', ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-md-3" style="margin-left: auto; margin-right: auto;">
                        <label for="cantidad">Cantidad:</label>
                        {{ Form::number('cantidad', null, ['placeholder'=>'Ingrese la cantidad de productos', 'class'=>'form-control']) }}
                    </div>
                    <div class="form-group col-md-1" style="margin-left: auto; margin-right: auto;">
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>

                </div>

                {!! Form::close() !!}
                @include('Prueba.Orden.form_editar')

                <h1 style="text-align: center">
                    <a href="{{ route("orden.pdf",$ordenxxx) }}" class="btn btn-primary">Pdf</a>
                </h1>
        </div>
    </div>

    <h1 style="text-align: center">
        <button type="submit" class="btn btn-primary">Editar</button>

        <a href="{{ route("orden") }}" class="btn btn-primary">Regresar</a>
    </h1>
</div>
@endsection
