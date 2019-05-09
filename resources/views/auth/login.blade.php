@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
           <img src={{asset('images/banner-sigi2.png')}} style="float:right;"  height="80px">
        </div>
        <div class="col-md-3" style="padding: 0px 0px 0px 0px;">
            <h3 class="text-left text-sigi mt-20">INICIAR SESIÓN</h3>
        </div>
        <div class="col-md-8">
           <img src={{asset('images/banner-sigi.png')}} style="float:right;"  height="80px">
        </div>

    </div>
    <div class="row">
        <!--<h3 class="text-center bg-sigi text-white p-h-10 m-h-0">Departamento de Capital Humano<br><small class="text-white">Sistema Gestor de Incidencias</small></h3>-->
        <div class="col-md-5 col-md-offset-1 p-h-25">
            <form  role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <p class="fs15p text-justify"><b>Instrucciones:</b><br/>Para ingresar a la plataforma deberá ingresar los datos que se le solicitan a continuación.</p>
                <div class=" p-h-25 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="text-sigi fs-l">Número de empleado</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="text-sigi fs-l">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <!--<div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <center><button type="submit" class="btn btn-md btn-sigi" style="width:95%;">Ingresar</button></center>
                </div>
                <div class="form-group text-right p-h-10">
                    ¿Olvido su contraseña?
                        <b><a  style="color:red;text-decoration: none;" href="{{ url('/password/reset') }}">
                            Recuperar contraseña
                        </a></b>
                </div>
            </form>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <center><img src={{asset('images/login.png')}}  class="img-responsive"></center>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
@endsection
