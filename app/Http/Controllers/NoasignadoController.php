<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NoasignadoController extends Controller
{
	public function sin_asignar()
	{  
    $denuncia= DB::table('denuncias')
    ->where('denuncias.confirmar','No')
    ->get();
        return view('sinasignar.sinasignar',compact(
            'denuncia'));
        }
}
