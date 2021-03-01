<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido', 'Nombre:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Asunto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asunto', 'Asunto:') !!}
    {!! Form::text('asunto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('confirmar', 'Confirmar:') !!}
    {!! Form::select('confirmar',array('Si' => 'Si', 'No' => 'No'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('denuncias.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
