@if (auth()->check()) <!--Devuelve true si esta con una sesión activa-->
<div class="panel panel-default">
    <!--<div class="panel-heading bg-sigi text-white">Menú</div>-->
    <!--<div class="panel-body"> -->               
        <ul class="nav nav-pills nav-stacked">
          <li @if(request()->is('home')) class="active text-right" @endif><a href="/home" class="list-group-item">Inicio</a></li>
          @if (auth()->user()->is_adminCH) <!--Accesor-->
          <li @if(request()->is('usuarios')) class="active text-right" @endif><a href="/usuarios" class="list-group-item">Administración de Usuarios</a></li>
          @endif  
          <li @if(request()->is('asistencias')) class="active text-right" @endif><a href="/asistencias" class="list-group-item">Asistencia</a></li>    
          <li @if(request()->is('incidencias')) class="active text-right" @endif><a href="/incidencias" class="list-group-item">Incidencias</a></li>    
          <li @if(request()->is('justificantes')) class="active text-right" @endif><a href="/justificantes" class="list-group-item">Justificantes</a></li>    
          <li @if(request()->is('reportes')) class="active text-right" @endif><a href="/reportes" class="list-group-item">Reportes</a></li> 
          <li class="text-center"><a href="#" class="list-group-item">Manual de Usuario</a></li> 

          <!--@if (!auth()->user()->is_auxCH) <!--Si no es un cliente-->
         <!-- <li @if(request()->is('ver')) class="active text-right" @endif><a href="/ver" class="list-group-item">Ver incidencias</a></li>
          @endif-->

          <!--@if (auth()->user()->is_adminCH) <!--Accesor-->
          <!--<li role="presentation" >
              <a class="list-group-item" data-toggle="dropdown" href="#" role="button" >
                  Administración<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                    <li><a href="/usuarios">Usuarios</a></li>
                    <li><a href="#">Proyecto</a></li>
                    <li><a href="#">Configuración</a></li>
              </ul>
          </li>
          @endif-->
        </ul>
    <!--</div>-->
</div>
@endif