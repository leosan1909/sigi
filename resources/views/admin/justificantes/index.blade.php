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
                        <div class="panel-heading-sigi text-center"><h6>Justificantes</h6></div>
                        <div class="panel-body">
                        <div class="row text-right m-h-15">
                            <div class="col-md-12">
                                <div class="tab">
                                  <button class="tablinks active" onclick="carga_formulario(event, 'carga_asistencias')">Cargar asistencias (Excel)</button>
                                  <button class="tablinks" onclick="carga_formulario(event, 'noLaborable')">Días no laborables</button>
                                  <button class="tablinks" onclick="carga_formulario(event, 'periodoVacacional')">Períodos vacacionales</button>
                                  <button class="tablinks" onclick="carga_formulario(event, 'ver_asistencia')">Visualizar asistencia</button>
                                </div>
<!---CARGA ASISTENCIA-------------------------------------->
                                <div id="carga_asistencias" class="tabcontent active" style="display: block;">
                                    <h5 class="text-left mt-20 text-escom">Cargar asistencias<br/><small>Excel</small></h5>
                                    <p>¿Desea obtener el <i>"Layout para la carga de asistencias"</i> haga clic <a href="" download><b>Aquí</b></a></p> 
                                    <div class="row text-center m-h-50">
                                      <button class="btn btn-sm btn-success">
                                        Importar excel de asistencias <i class="glyphicon glyphicon-upload"></i>
                                      </button>
                                    </div>
                                </div>
<!---NO LABORABLE-------------------------------------->
                                <div id="noLaborable" class="tabcontent">
                                    <h5 class="text-left mt-20 text-escom">Día no laborable</h5>
                                    <div class="row text-right m-h-15">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-escom" onclick="esconder_formularioRegistro()" data-toggle="modal" data-target="#ModalRegistroPersonal"> Agregar día no laborable <span class="glyphicon glyphicon-plus"></span></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">          
                                        <table class="table table-bordered">
                                            <thead class="bg-escom text-white"> 
                                                <tr class="text-center">
                                                    <td>Título</td>
                                                    <td>Fecha Inicio</td>
                                                    <td>Fecha Fin</td>
                                                    <td>Justificante</td>
                                                    <td>Opciones</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            </tbody>
                                        </table>
                                        <div class="row text-center">
                                        </div>
                                    </div>
                                </div>
<!---PERíODO VACACIONAL------------------------------------->
                                <div id="periodoVacacional" class="tabcontent">
                                    <h5 class="text-left mt-20 text-escom">Período Vacacional</h5>
                                    <div class="row text-right m-h-15">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-escom" onclick="esconder_formularioRegistro()" data-toggle="modal" data-target="#ModalRegistroPersonal"> Agregar periodo vacacional<span class="glyphicon glyphicon-plus"></span></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">          
                                        <table class="table table-bordered">
                                            <thead class="bg-escom text-white"> 
                                                <tr class="text-center">
                                                    <td>Tipo</td>
                                                    <td>Fecha Inicio</td>
                                                    <td>Fecha Fin</td>
                                                    <td>Opciones</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            </tbody>
                                        </table>
                                        <div class="row text-center">
                                        </div>
                                    </div>
                                </div>
<!---VER ASISTENCIA-------------------------------------->
                                <div id="ver_asistencia" class="tabcontent" >
                                    <h5 class="text-left mt-20 text-escom">Visualizar asistencia</h5>
                                    <div class="row m-h-15 text-left">
                                        <div class="col-md-12">
                                            <div class="form-group" id="div_genero">
                                                <label for="sexo">Número de tarjeta:</label>
                                                <input type="email" name="email" id="email" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="div_genero">
                                                <label for="sexo">Año:</label>
                                                <select class="form-control" name="genero" id="genero">
                                                    <option value="">Seleccione una opción...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="div_genero">
                                                <label for="sexo">Mes:</label>
                                                <select class="form-control" name="genero" id="genero">
                                                    <option value="">Seleccione una opción...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" id="div_estatus">
                                                <label for="estatus">Quincena:</label>
                                                <select name="estatus" id="estatus" class="form-control">
                                                    <option value="">Selecciona una opción...</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        </div><!--Fin body panel-->
                    </div><!--Fin panel-->
                </div><!--Fin col-md-->
            </div><!--Fin row que-->
        </div><!--Fin col que contiene al panel-->
    </div>
</div>

@endsection
