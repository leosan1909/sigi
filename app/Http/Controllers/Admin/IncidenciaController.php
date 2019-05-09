<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IncidenciaController extends Controller
{
    public function index() //Método que regresa una vista
    {
    	return view('admin.incidencias.index'); 
    }
}
