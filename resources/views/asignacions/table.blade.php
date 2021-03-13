<div class="table-responsive-sm">
    <table class="table table-striped" id="data">
        <thead>
            <tr>
                <th>Soporte Id</th>
                <th>Denuncia Id</th>
                <th>Fecha</th>
                <th>Proceso</th>
                <th>Observación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($asignacions as $asignacion)
            <tr>
                <td>{{ $asignacion->soporte->nombre }}</td>
                <td>{{ $asignacion->denuncia->descripcion }}</td>
                <td>{{ $asignacion->fecha }}</td>
                <td>@switch(true)
                    @case($asignacion->proceso == 'En Proceso')
                    <span class="badge badge-primary"> {{ $asignacion->proceso }} </span>
                    @break
                    @case($asignacion->proceso == 'Terminado')
                    <span class="badge badge-success"> {{ $asignacion->proceso }} </span>
                    @break
                    @case($asignacion->proceso == 'Pendiente' )
                    <span class="badge badge-danger"> {{ $asignacion->proceso }} </span>
                    @break
                    @endswitch</td>
                <td>{{ $asignacion->observacion }}</td>
                <td>
                    {!! Form::open(['route' => ['asignacions.destroy', $asignacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('asignacions.show', [$asignacion->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('asignacions.edit', [$asignacion->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "Volver a confirmar. ¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>