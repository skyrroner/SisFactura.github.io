<div class="form-row">
    <div class="form-group col-md-3">
        <label for="nombre">Nombre del cliente:</label>
        {{ Form::text('nombre', null, ['placeholder'=>'Ingrese el nombre del cliente', 'class'=>'form-control']) }}
    </div>
    <div class="form-group col-md-3">
        <label for="direccion">Dirección:</label>
        {{ Form::text('direccion', null, ['placeholder'=>'Ingrese la dirección', 'class'=>'form-control']) }}
    </div>
    <div class="form-group col-md-3">
        <label for="telefono">Teléfono:</label>
        {{ Form::text('telefono', null, ['placeholder'=>'Ingrese el número de teléfono', 'class'=>'form-control']) }}
    </div>
    <div class="form-group col-md-3">
        <label for="email">Email:</label>
        {{ Form::email('email', null, ['placeholder'=>'Ingrese el email', 'class'=>'form-control']) }}
    </div>
</div>
