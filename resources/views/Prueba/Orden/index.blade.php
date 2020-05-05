@extends('layouts.index')

@section('content')
<div class="card card-outline card-secondary">
    <style>
        .selected {
            background-color: coral;
        }
    </style>
    <div class="card-header">
        <h2>Órdenes
            <a href="{{ route("orden.nuevo") }}" class="btn btn-primary">Nueva Orden</a>
            <a href="{{ route("home") }}" class="btn btn-primary">Regresar</a>
        </h2>
    </div>
    <div class="card-body">
        <table class="table" id='ordenes'>
            <thead>
                <tr>
                    <th style="width: 200px">ACCIONES</th>
                    <th>ID</th>
                    <th>CLIENTE</th>
                    <th>DIRECCIÓN</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>COSTO TOTAL</th>
                </tr>
            </thead>
            <footer>
                <tr>
                    <th>ACCIONES</th>
                    <th>ID</th>
                    <th>CLIENTE</th>
                    <th>DIRECCIÓN</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>COSTO TOTAL</th>
                </tr>
            </footer>
        </table>
    </div>
</div>
@endsection
@section('scripts')
@include('Prueba.Orden.js.js')
@endsection
