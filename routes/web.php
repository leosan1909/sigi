<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/reportar', 'HomeController@getReport'); //Controlador@nombreMetodo
//Route::post('/reportar', 'HomeController@postReport'); //La ruta puede ser la misma


Route::group(['middleware' => 'admin', 'namespace' => 'Admin'] , function (){ //Grupo de rutas y se les aplica el middleware indicado para evitar entrar a cada control para evitarle el middleware en su contructor
	Route::get('/usuarios','UserController@index');
	Route::post('/usuarios','UserController@store'); //Registrar--Nombres de métodos para controladores de acuerdo a la acción
	Route::get('/usuario/{id}','UserController@edit');//Pasar parametro a travez de la ruta, el controlador va a recibir el valir del id--EDIT es para haceder a la pantalla de 
	Route::get('/usuario/{id}/eliminar','UserController@delete');
	Route::post('/usuario/{id}','UserController@update');//Aquí se haría la actualización al momento de darle clic en guardar
	Route::get('/asistencias','AsistenciaController@index');
	Route::get('/incidencias','IncidenciaController@index');
	Route::get('/justificantes','JustificanteController@index');
	Route::get('/reportes','ReporteController@index');
});