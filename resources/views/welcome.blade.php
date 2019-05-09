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
                        <div class="panel-heading-sigi text-center"><h6>Ver Incidencias</h6></div>
                        <div class="panel-body">
                        <div class="row text-right m-h-15">
                            <div class="col-md-12">
                                <div class="tab">
                                  <button class="tablinks active" onclick="carga_formulario(event, 'carga_asistencias')">Quincena actual</button>
                                </div>
<!---QUINCENA------------------------------------->
                                <div id="carga_asistencias" class="tabcontent active" style="display: block;">
                                    <h5 class="text-left mt-20 text-escom">Quincena</h5>
                                    <p><b>Fecha Inicio:</b> 16/03/2019 <b>Fecha Fin:</b> 31/03/2019</p> 
                                    <div class="table-responsive m-h-15">          
                                        <table class="table table-bordered">
                                            <thead class="bg-escom text-white"> 
                                                <tr class="text-center">
                                                    <td>Tipo de Incidencia</td>
                                                    <td>No.Incidencia</td>
                                                    <td>Justificada</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            </tbody>
                                        </table>
                                        <div class="row text-center">
                                                <div class="row">
                                                        <button class="btn btn-sm btn-error">Cancelar</button>
                                                </div>
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
