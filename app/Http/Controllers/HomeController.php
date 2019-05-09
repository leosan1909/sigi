<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Directiva para usar el método request
use App\Category;
use App\Incident; //Modelo de la incidencia a utilizar

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getReport() {
        //$project=Project::find(1);
        //$categories= $project->categories;
        $categories=Category::where('project_id',1)->get();
        return view('report')->with(compact('categories'));
    }
    public function postReport(Request $request) {
    $rules= [
        'category_id' => 'required', //Varias reglas de validacion en la documentación de laravel o se pueden crear propias
        'severity'=> 'required|in:M,N,A',
        'title' =>'required|min:5',
        'description'=>'required|min:15'
    ];
        //SE PUEDEN CREAR VALIDACIONES AQUÍ
        $this->validate($request, $rules); //Metodo validate recibe dos parametros $requesy y un array asociativo que irá en $rules

        //return $request->input('severity'); //Regresa lo que hay en el input request
       // return $request->all(); //El método all nos va a mostrar todo lo que contiene el objeto request en formato JSON
        //Incident::create([ ]) //Para registrar la incidencia una forma es hacer el uso de la clase y el método create
        //Incident::create($request->all()) //Para registrar la incidencia una forma es hacer el uso de la clase y el método create haciendo uso del método all para pasar todo y 
        //dd($request->input('category_id')?:null);  //"?" Sirve como operador ternario si es 0 va a asignar NULL
        $incident = new Incident();//Para registrar la incidencia otra forma es crear una variable instanciando un objeto de la clase a crear y luego asignemos el valor que tendra para cada campo y registrar en una linea 
         $incident->category_id= $request->input('category_id') ?:null; //"?" Sirve como operador ternario si es 0 va a asignar NULL//Asignación para cada atributo
        $incident->severity= $request->input('severity'); //Asignación para cada atributo
        $incident->title= $request->input('title');
        $incident->description= $request->input('description');
        $incident->client_id=auth()->user()->id; //Trae el id del usuario identificado
        $incident->save(); //Método para hacer el insert en la BD
        return back(); //Regresa al usuario a donde estaba
        //return dd($request->all()); //El método "dd" va a darle un formato al JSON

    }
}
