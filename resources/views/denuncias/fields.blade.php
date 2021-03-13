<!-- Nombres y Apellidos campos -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono campos -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio campos -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Asunto campos -->
<div class="form-group col-sm-6">
    {!! Form::label('asunto', 'Asunto:') !!}
    {!! Form::text('asunto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripción campos -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Confirmar campos -->
<div class="form-group col-sm-6">
    {!! Form::label('confirmar', 'Confirmar:') !!}
    {!! Form::select('confirmar',array('Si' => 'Si', 'No' => 'No'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Enviar campos -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('denuncias.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
