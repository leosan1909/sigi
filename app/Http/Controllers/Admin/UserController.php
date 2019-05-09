<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CatDepartamento;
use App\CatSubdireccion;
use App\CatPuesto;
use App\CatEstatus;


class UserController extends Controller
{
    public function index() //Método que regresa una vista
    {
    	//$users=User::all();
        $departamentos=CatDepartamento::all();
        $subdirecciones=CatSubdireccion::where('descripcion','<>','Dirección')->get();
        $puestos=CatPuesto::where([
                    ['id_puesto', '<>', 1],
                    ['id_puesto', '<>', 3]
                ])->get();
        $estatus=CatEstatus::all();
       // $users=User::where('id_puesto','>',1)->get();
    	$users=User::where('id_puesto','>',1)->paginate(5);
    	return view('admin.users.index')->with(compact('users','departamentos','subdirecciones','puestos','estatus')); //Ya que esta ubicado en una carpeta dentro de otra carpeta
    }
    public function store(Request $request) //Método post que responde a hacer una operación y regresarnos a donde estabamos
    {
    $rules= [
        'email' => 'required',
        'name' => 'required'
    ];
        $this->validate($request, $rules);
    	$user=new User();
        $user->name=$request->input('no_empleado');
        $user->name=$request->input('no_tarjeta');
    	$user->name=$request->input('name');
        $user->name=$request->input('ap_paterno');
        $user->name=$request->input('ap_materno');
    	$user->email=$request->input('email');
        $user->name=$request->input('subdireccion');
        $user->name=$request->input('departamento');
    	$user->password=bcrypt($request->input('password'));
    	$user->id_puesto=2;
    	//$user->save();
    	dd($request->all());

    	return back()->with('notificacion', 'Usuario registrado exitosamente');
    }
    public function edit($id)
    {
    	$user=User::find($id);
    	return view('admin.users.edit')->with(compact('user'));
    }    
    public function update($id,Request $request) {
    	$user = User::find($id);
    	$user->name = $request->input('name');
    	$password = $request->input('password');
    	if ($password)
    		$user->password = bcrypt($password);
    	$user->save();
    	return back()->with('notificacion', 'Usuario modificado exitosamente.');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('notification', 'El usuario se ha dado de baja correctamente.');
    }

}
