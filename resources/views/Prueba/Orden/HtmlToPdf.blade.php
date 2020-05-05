<?php
@extends('layouts.incex')

ob_start()

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="nombre">Nombre del cliente:</label>
    </div>
    <div class="form-group col-md-3">
        <label for="direccion">Dirección:</label>

    <div class="form-group col-md-3">
        <label for="telefono">Teléfono:</label>

    </div>
    <div class="form-group col-md-3">
        <label for="email">Email:</label>
    </div>
</div>

$html=on_get_clean()
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();




?>
