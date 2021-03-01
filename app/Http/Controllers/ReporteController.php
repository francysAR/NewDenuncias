<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReporteController extends Controller
{
    public function index()
    {
     $reporte=DB::table('denuncias')
        ->join('soportes','soportes.id','=', 'denuncias.id')
        
        ->select('soportes.nombre','soportes.telefono','soportes.encargado','denuncias.nombre_apellido','denuncias.telefono','denuncias.barrio','denuncias.descripcion','denuncias.confirmar')
            ->get();
           return view ('reporte', compact ('reporte'));
    }
}
