<!-- Nombres y Apellidos Campos -->
<div class="form-group">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    <p>{{ $denuncia->nombre_apellido }}</p>
</div>

<!-- Teléfono Campos -->
<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    <p>{{ $denuncia->telefono }}</p>
</div>

<!-- Barrio Campos -->
<div class="form-group">
    {!! Form::label('barrio', 'Barrio:') !!}
    <p>{{ $denuncia->barrio }}</p>
</div>

<!-- Asunto Campos -->
<div class="form-group">
    {!! Form::label('asunto', 'Asunto:') !!}
    <p>{{ $denuncia->asunto }}</p>
</div>

<!-- Descripción Campos -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{{ $denuncia->descripcion }}</p>
</div>

<!-- Creados el Campos -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $denuncia->created_at }}</p>
</div>

<!-- Actualizados el Campos -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $denuncia->updated_at }}</p>
</div>

