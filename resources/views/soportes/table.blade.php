<div class="table-responsive-sm">
    <table class="table table-striped" id="data">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Encargado</th>
        <th>Descripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($soportes as $soporte)
            <tr>
            <td>{{ $soporte->nombre }}</td>
            <td>{{ $soporte->cedula }}</td>
            <td>{{ $soporte->telefono }}</td>
            <td>{{ $soporte->encargado }}</td>
            <td>{{ $soporte->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['soportes.destroy', $soporte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('soportes.show', [$soporte->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('soportes.edit', [$soporte->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>