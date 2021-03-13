@extends('layouts.app')

@section('content')
 

    <ol class="breadcrumb">
        <li class="breadcrumb-item">Reportes</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Reportes
                        </div>
                         <div class="card-body">
                            <div class="table-responsive-sm">

                            <div class="md-card-content" style="overflow-x: auto;">
    <table class="table table-striped" id="data">
        <thead>
            <tr>
        
                <th>Nombres de Soportes</th>
                <th>Teléfonos</th>
                <th>Encargados</th>
                <th>Nombres Denunciantes</th>
                <th>Teléfonos</th>
                <th>Barrios</th>
                <th>Descripción</th>
                <th>Confirmados</th>
                <th>Fecha</th>
                <th>Proceso</th>
               
            </tr>
        </thead>
        <tbody>

            @foreach($reporte as $reporte)
            <tr>
               	<td>{{ $reporte->nombre }}</td>
               	<td>{{ $reporte->telefono }}</td>
            	<td>{{ $reporte->encargado }}</td>
                <td>{{ $reporte->nombre_apellido }}</td>
                <td>{{ $reporte->telefono }}</td>
                <td>{{ $reporte->barrio}}</td>
                <td>{{ $reporte->descripcion }}</td>
                

                <td>@switch(true)
                @case($reporte->confirmar == 'Si')
                <span class="badge badge-success"> {{ $reporte->confirmar }} </span>
                @break
                @case($reporte->confirmar == 'No' )
                <span class="badge badge-danger"> {{ $reporte->confirmar }} </span>
                @break
                @endswitch</td>
                <td>{{ $reporte->fecha }}</td>
                 <td>@switch(true)
                    @case($reporte->proceso == 'En Proceso')
                    <span class="badge badge-primary"> {{ $reporte->proceso }} </span>
                    @break
                    @case($reporte->proceso == 'Terminado')
                    <span class="badge badge-success"> {{ $reporte->proceso }} </span>
                    @break
                    @case($reporte->proceso == 'Pendiente' )
                    <span class="badge badge-danger"> {{ $reporte->proceso }} </span>
                    @break
                    @endswitch</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
        <div class="pull-right mr-3">                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
