@extends('layouts.app')
@section('content')
@include('includes.nav')       
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.menu')
        </div>
        <div class="col-md-9 text-center">
            <h2 class="text-sigi">Bienvenido al Sistema Gestor de Incidencias (SIGI)<br/><small>Escuela Superior de Cómputo</small></h2>
            <img src={{asset('images/logo.png')}}  width="400px" class="m-h-50">
        </div>
    </div>
</div>
@endsection
