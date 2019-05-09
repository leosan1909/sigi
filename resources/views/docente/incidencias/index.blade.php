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
        				<div class="panel-heading-sigi text-center"><h6>Incidencias</h6></div>
                        <div class="panel-body">
                        <div class="row text-right m-h-15">
                            <div class="col-md-12">
                                <div class="tab">
                                  <button class="tablinks active" onclick="carga_formulario(event, 'carga_asistencias')">Quincena actual</button>
                                  <button class="tablinks" onclick="carga_formulario(event, 'noLaborable')">Histórico</button>
                                </div>
<!---QUINCENA------------------------------------->
                                <div id="carga_asistencias" class="tabcontent active" style="display: block;">
                                    <h5 class="text-left mt-20 text-escom">Quincena</h5>
                                    <p><b>Fecha Inicio:</b> 16/03/2019 <b>Fecha Fin:</b> 31/03/2019</p> 
                                    <div class="row">
                                        <button class="btn btn-sm btn-success">Descargar excel</button>
                                    </div>
                                    <div class="table-responsive m-h-15">          
                                        <table class="table table-bordered">
                                            <thead class="bg-escom text-white"> 
                                                <tr class="text-center">
                                                    <td>No.Tarjeta</td>
                                                    <td>Nombre</td>
                                                    <td>Fecha</td>
                                                    <td>Tipo de Incidencia</td>
                                                    <td>Departamento</td>
                                                    <td>No.Incidencia</td>
                                                    <td>Justificada</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            </tbody>
                                        </table>
                                        <div class="row text-center">
                                        </div>
                                    </div>
                                </div>
<!---HISTORICO-------------------------------------->
                                <div id="noLaborable" class="tabcontent">
                                    <h5 class="text-left mt-20 text-escom">Histórico</h5>
                                    <div class="row m-h-15 text-left">
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
                                    <div class="table-responsive m-h-15">          
                                        <table class="table table-bordered">
                                            <thead class="bg-escom text-white"> 
                                                <tr class="text-center">
                                                    <td>No.Tarjeta</td>
                                                    <td>Nombre</td>
                                                    <td>Fecha</td>
                                                    <td>Tipo de Incidencia</td>
                                                    <td>Departamento</td>
                                                    <td>No.Incidencia</td>
                                                    <td>Justificada</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            </tbody>
                                        </table>
                                        <div class="row text-center">
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
