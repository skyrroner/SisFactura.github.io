@extends('layouts.index')

@section('content')
<div class="card card-outline card-secondary">
    <style>
       .selected{
        background-color: coral;
       }
    </style>
    <div class="card-header">
        <h3 class="card-title">
            <h2>Productos
                <a href="{{ route("producto.nuevo") }}" class="btn btn-primary">Nuevo Producto</a>
                <a href="{{ route("home") }}" class="btn btn-primary">Regresar</a>
            </h2>
        </h3>
    </div>
    <div class="card-body">
        <table class="table" id='productos'>
            <thead>
                <tr>
                    <th style="width: 200px">ACCIONES</th>
                    <th>ID</th>
                    {{-- <th>CLIENTE</th>
                    <th>COMENTARIO</th>
                    <th>PRODUCTOS</th>
                    <th>CANTIDAD</th> --}}
                    <th>PRODUCTO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>VALOR</th>
                </tr>
            </thead>
            <footer>
            <tr>
                <th>ACCIONES</th>
                <th>ID</th>
                {{-- <th>CLIENTE</th>
                <th>COMENTARIO</th>
                <th>PRODUCTOS</th>
                <th>CANTIDAD</th> --}}
                <th>PRODUCTO</th>
                <th>DESCRIPCIÓN</th>
                <th>VALOR</th>
            </tr>
            </footer>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@include('Prueba.Producto.js.js')
@endsection
