<div class="form-group">
    <label for="nombre">Nombre del producto:</label>
    {{ Form::text('nombre', null, ['placeholder'=>'Ingrese el nombre del cliente', 'class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="descrip">Descripción:</label>
    {{ Form::textarea('descrip', null, ['placeholder'=>'Comentarios', 'class'=>'form-control']) }}
</div>
    <label for="valor">Valor:</label>
    {{ Form::number('valor', null, ['placeholder'=>'', 'class'=>'form-control']) }}
</div>
