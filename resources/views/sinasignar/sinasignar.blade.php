@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">Sin Asignar</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Sin Asignar
                            
                         </div>
                         <div class="card-body">
                            <div class="table-responsive-sm">
     <table class="table table-striped" id="data">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Telefono</th>
        <th>Barrio</th>
        <th>Asunto</th>
        <th>Descripcion</th>
        <th>Confirmado</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($denuncia as $denuncia)
            <tr>
                <td>{{ $denuncia->nombre }}</td>
                <td>{{ $denuncia->telefono }}</td>
                <td>{{ $denuncia->barrio }}</td>
                <td>{{ $denuncia->asunto }}</td>
                <td>{{ $denuncia->descripcion }}</td>
                <td><span class="badge badge-danger"> {{ $denuncia->confirmar }} </span></td>
                


                
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