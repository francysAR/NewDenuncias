<!-- Soporte Id Field -->
<div class="form-group">
    {!! Form::label('soporte_id', 'Soporte Id:') !!}
    <p>{{ $asignacion->soporte->nombre }}</p>
</div>

<!-- Denuncia Id Field -->
<div class="form-group">
    {!! Form::label('denuncia_id', 'Denuncia Id:') !!}
    <p>{{ $asignacion->denuncia->descripcion  }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $asignacion->fecha }}</p>
</div>

<!-- Proceso Field -->
<div class="form-group">
    {!! Form::label('proceso', 'Proceso:') !!}
    <p>{{ $asignacion->proceso }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{{ $asignacion->observacion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $asignacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $asignacion->updated_at }}</p>
</div>

