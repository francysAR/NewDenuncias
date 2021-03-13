<!-- Soporte Id. campos -->
<div class="form-group col-sm-6">
    {!! Form::label('soporte_id', 'Soporte Id:') !!}
    {!! Form::select('soporte_id', $soporte, null, ['class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>

<!-- Denuncia Id campos -->
<div class="form-group col-sm-6">
    {!! Form::label('denuncia_id', 'Denuncia Id:') !!}
    {!! Form::select('denuncia_id', $denuncia, null, ['class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>

<!-- Fecha campos -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Proceso campos -->
<div class="form-group col-sm-6">
    {!! Form::label('proceso', 'Proceso:') !!}
    {!! Form::select('proceso',array('En Proceso' => 'En Proceso', 'Terminado' => 'Terminado','Pendiente' => 'Pendiente'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Observación campos -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion', 'Observación:') !!}
    {!! Form::text('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit campos -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('asignacions.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
