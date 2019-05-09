@extends('layouts.app')
@section('content')
@include('includes.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.menu')
        </div>
        <div class="col-md-9">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="panel panel-default">
        				<div class="panel-heading-sigi text-center"><h6>Administración de Usuarios</h6></div>
                        <div class="panel-body">
                        <div class="row text-right m-h-15">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-escom" onclick="esconder_formularioRegistro()" data-toggle="modal" data-target="#ModalRegistroPersonal"> Agregar personal <span class="glyphicon glyphicon-plus"></span></button>
                            </div>
                        </div>
                        <div class="table-responsive">          
                            <table class="table table-bordered">
                                <thead class="bg-escom text-white"> 
                                    <tr class="text-center">
                                        <td>Número de<br/>empleado</td>
                                        <td>Nombre</td>
                                        <td>Tarjeta</td>
                                        <td>Departamento</td>
                                        <td>Puesto</td>
                                        <td>Estatus</td>
                                        <td>Opciones</td>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->no_empleado }}</td>
                                        <td>{{ $user->name }} {{ $user->ap_paterno }} {{ $user->ap_materno }}</td>  
                                        <td>{{ $user->no_tarjeta }}</td>                                        
                                        <td>{{ $user->id_departamento }}</td>
                                        <td>{{ $user->id_puesto }}</td>
                                        <td>{{ $user->id_estatus }}</td>
                                        <td><a href="/usuario/{{ $user->id }}"class="btn btn-sm btn-warning" title="editar">Editar <span class="glyphicon glyphicon-pencil"></span></a>     <a href="/usuario/{{ $user->id }}/eliminar" class="btn btn-sm btn-danger" title="eliminar">Eliminar <span class="glyphicon glyphicon-remove"></span></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row text-center">
                                 {{ $users->links() }}
                            </div>
                        </div>
                        </div><!--Fin body panel-->
                    </div><!--Fin panel-->
                </div><!--Fin col-md-->
            </div><!--Fin row que-->
        </div><!--Fin col que contiene al panel-->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalRegistroPersonal" role="dialog">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-heade bg-escom text-white">
      <button type="button" class="close" data-dismiss="modal" sty>&times;</button>
      <h4 class="modal-title">Registrar Personal</h4>
    </div>
    <div class="modal-body">
        @if (session('notificacion'))
        <div class="alert alert-success">
            {{ session('notificacion') }}
        </div>
        @endif                                
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="puesto">Tipo de cuenta:</label>
                        <select name="puesto" id="puesto" class="form-control" onchange="mostrar_formularioRegistro(this.value)">
                            <option value="">Selecciona una opción...</option>
                            @foreach($puestos as $puesto)  
                            <option value="{{ $puesto->id_puesto }}">{{ $puesto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" id="div_no_empleado">
                        <label for="no_empleado">Número de empleado:</label>
                        <input type="text" name="no_empleado" id="no_empleado" class="form-control"  value={{ old('no_empleado') }}>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group" id="div_no_tarjeta">
                        <label for="no_tarjeta">Número de tarjeta:</label>
                        <input type="text" name="no_tarjeta" id="no_tarjeta" class="form-control"  value={{ old('no_tarjeta') }}>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="div_nombre">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" value={{ old('name') }}>
                    </div>
                </div>
            </div>
            <div class="row" id="div_apellidos">
                <div class="col-md-6" >
                    <div class="form-group">
                        <label for="ap_paterno">Apellido paterno:</label>
                        <input type="text" name="ap_paterno" id="ap_paterno" class="form-control"  value={{ old('ap_paterno') }}>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ap_materno">Apellido materno:</label>
                        <input type="text" name="ap_materno" id="ap_materno" class="form-control"  value={{ old('ap_materno') }}>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="div_email">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control"  value={{ old('email') }}>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" id="div_subdireccion">
                        <label for="subdireccion">Subdirección:</label>
                        <select name="subdireccion" id="subdireccion" class="form-control">
                            <option value="">Selecciona una opción...</option>
                            @foreach($subdirecciones as $subdireccion) 
                            <option value="{{ $subdireccion->id_subdireccion}}">{{ $subdireccion->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>                                              
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" id="div_departamento">
                        <label for="departamento">Departamento:</label>
                        <select name="departamento" id="departamento" class="form-control">
                            <option value="">Selecciona una opción...</option>
                            @foreach($departamentos as $departamento)  
                            <option value="{{ $departamento->id_departamento }}">{{ $departamento->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" id="div_genero">
                        <label for="sexo">Género:</label>
                        <select class="form-control" name="genero" id="genero">
                            <option value="">Seleccione una opción...</option>
                            <option value="H">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" id="div_estatus">
                        <label for="estatus">Estatus:</label>
                        <select name="estatus" id="estatus" class="form-control">
                            <option value="">Selecciona una opción...</option>
                            @foreach($estatus as $estado)  
                            <option value="{{ $estado->id_estatus }}">{{ $estado->descripcion }}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>
            </div>                                  
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="text" name="pass" class="form-control" value={{ old('pass',str_random(10)) }}>
            </div>          
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" id="div_tipo_horario">
                        <label for="tipo_horario">Tipo de horario:</label>
                        <select class="form-control" name="tipo_horario" id="tipo_horario" onchange="mostrar_formularioHorario(this.value)">
                            <option value="">Seleccione una opción...</option>
                            <option value="v">Horario abierto</option>
                            <option value="f">Horario fijo</option>
                        </select>
                    </div>
                </div>
            </div>  
            <div class="table-responsive"  id="div_horario">          
                <table class="table table-bordered">
                    <thead class="bg-escom text-white"> 
                        <tr class="text-center">
                            <td>Día</td>
                            <td>Hora de Entrada</td>
                            <td>Hora de Salida</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="text-left">Lunes</td>
                            <td><input type="time" name="he_lunes"></td>
                            <td><input type="time" name="hs_lunes"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Martes</td>
                            <td><input type="time" name="he_martes"></td>
                            <td><input type="time" name="hs_martes"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Miercoles</td>
                            <td><input type="time" name="he_miercoles"></td>
                            <td><input type="time" name="hs_miercoles"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Jueves</td>
                            <td><input type="time" name="he_jueves"></td>
                            <td><input type="time" name="hs_jueves"></td>
                        </tr>
                        <tr>
                            <td class="text-left">Viernes</td>
                            <td><input type="time" name="he_viernes"></td>
                            <td><input type="time" name="hs_viernes"></td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            <div class="row text-right">                                               
                    <button class="btn btn-escom">Registrar</button>
            </div>
        </form>
    </div>
  </div>
</div>
</div>

@endsection
