<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReporteController extends Controller
{
    public function index()
    {
     $reporte=DB::table('asignacions')
        ->join('soportes','soportes.id','=', 'asignacions.soporte_id')
        ->join('denuncias','denuncias.id','=', 'asignacions.denuncia_id')
        ->select('denuncia_id','soportes.nombre','soportes.telefono','soportes.encargado','denuncias.nombre_apellido','denuncias.telefono','denuncias.barrio','denuncias.descripcion','denuncias.confirmar','asignacions.fecha','asignacions.proceso')
            ->where('asignacions.deleted_at',null)
            ->get();
           return view ('reporte', compact ('reporte'));
    }
}
