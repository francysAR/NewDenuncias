<!-- Soporte Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('soporte_id', 'Soporte Id:') !!}
    {!! Form::select('soporte_id', $soporte, null, ['class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>

<!-- Denuncia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('denuncia_id', 'Denuncia Id:') !!}
    {!! Form::select('denuncia_id', $denuncia, null, ['class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Proceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proceso', 'Proceso:') !!}
    {!! Form::select('proceso',array('En Proceso' => 'En Proceso', 'Terminado' => 'Terminado','Pendiente' => 'Pendiente'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::text('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('asignacions.index') }}" class="btn btn-secondary">Cancel</a>
</div>
