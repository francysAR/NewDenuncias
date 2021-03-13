<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FontController extends Controller
{
    
	public function ayuda(){
		return view('ayuda');
	}
}
