<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre_apellido', 'Nombre:') !!}
    <p>{{ $denuncia->nombre_apellido }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $denuncia->telefono }}</p>
</div>

<div class="form-group">
    {!! Form::label('barrio', 'Barrio:') !!}
    <p>{{ $denuncia->barrio }}</p>
</div>

<!-- Asunto Field -->
<div class="form-group">
    {!! Form::label('asunto', 'Asunto:') !!}
    <p>{{ $denuncia->asunto }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $denuncia->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $denuncia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $denuncia->updated_at }}</p>
</div>

