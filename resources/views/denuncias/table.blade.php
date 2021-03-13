<div class="table-responsive-sm">
    <table class="table table-striped" id="data">
        <thead>
            <tr>
                <th>Nombres y Apellidos</th>
                <th>Teléfono</th>
                <th>Barrio</th>
                <th>Asunto</th>
                <th>Descripción</th>
                <th>Confirmado</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            @foreach($denuncias as $denuncia)
               <tr>
                <td>{{ $denuncia->nombre_apellido }}</td>
                <td>{{ $denuncia->telefono }}</td>
                <td>{{ $denuncia->barrio }}</td>
                <td>{{ $denuncia->asunto }}</td>
                <td>{{ $denuncia->descripcion }}</td>

                    <td>@switch(true)
                     @case($denuncia->confirmar == 'Si')
                    <span class="badge badge-success"> {{ $denuncia->confirmar }} </span>
                    @break
                    @case($denuncia->confirmar == 'No' )
                    <span class="badge badge-danger"> {{ $denuncia->confirmar }} </span>
                    @break
                    @endswitch</td>

                    <td>

                    {!! Form::open(['route' => ['denuncias.destroy', $denuncia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('denuncias.show', [$denuncia->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('denuncias.edit', [$denuncia->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "Volver a confirmar('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>