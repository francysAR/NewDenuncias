<!-- Soporte Id campos -->
<div class="form-group">
    {!! Form::label('soporte_id', 'Soporte Id:') !!}
    <p>{{ $asignacion->soporte->nombre }}</p>
</div>

<!-- Denuncia Id campos -->
<div class="form-group">
    {!! Form::label('denuncia_id', 'Denuncia Id:') !!}
    <p>{{ $asignacion->denuncia->descripcion  }}</p>
</div>

<!-- Fecha campos -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $asignacion->fecha }}</p>
</div>

<!-- Proceso campos -->
<div class="form-group">
    {!! Form::label('proceso', 'Proceso:') !!}
    <p>{{ $asignacion->proceso }}</p>
</div>

<!-- Observación campos -->
<div class="form-group">
    {!! Form::label('observacion', 'Observación:') !!}
    <p>{{ $asignacion->observacion }}</p>
</div>

<!-- Creados el campos -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $asignacion->created_at }}</p>
</div>

<!-- Actualizado el campos -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $asignacion->updated_at }}</p>
</div>

