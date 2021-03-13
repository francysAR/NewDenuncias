<!-- Nombre campos-->
<div class="form-group">
    {!! Form::label('nombre', 'Nombres y Apellidos:') !!}
    <p>{{ $soporte->nombre }}</p>
</div>

<!-- Cedula campos-->
<div class="form-group">
    {!! Form::label('cedula', 'N° Cédula:') !!}
    <p>{{ $soporte->cedula }}</p>
</div>

<!-- Telefono campos-->
<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    <p>{{ $soporte->telefono }}</p>
</div>

<!-- Encargado campos-->
<div class="form-group">
    {!! Form::label('encargado', 'Encargado:') !!}
    <p>{{ $soporte->encargado }}</p>
</div>

<!-- Descripción campos-->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{{ $soporte->descripcion }}</p>
</div>

<!-- Creados el campos-->
<div class="form-group">
    {!! Form::label('created_at',Creado el:') !!}
    <p>{{ $soporte->created_at }}</p>
</div>

<!-- Actualizados el campos-->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $soporte->updated_at }}</p>
</div>

