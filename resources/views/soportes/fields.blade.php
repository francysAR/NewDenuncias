<!-- Nombres y Apellidos campos -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombres y Apellidos:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Cédula campos -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula', ' N° Cédula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Teléfono campos -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Encargado campos -->
<div class="form-group col-sm-6">
    {!! Form::label('encargado', 'Encargado:') !!}
    {!! Form::text('encargado', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripción campos -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Enviar campos -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('soportes.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
