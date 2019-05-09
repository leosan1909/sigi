@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
           <img src={{asset('images/banner-sigi2.png')}} style="float:right;"  height="80px">
        </div>
        <div class="col-md-3" style="padding: 0px 0px 0px 0px;">
            <h4 class="text-left text-sigi mt-20">RECUPERAR CONTRASEÑA</h4>
        </div>
        <div class="col-md-8">
           <img src={{asset('images/banner-sigi.png')}} style="float:right;"  height="80px" width="100%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1 p-h-25">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}
                  <p class="fs15p text-justify"><b>Instrucciones:</b><br/>Para ingresar a la plataforma deberá ingresar los datos que se le solicitan a continuación.</p>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                             <label for="email" class="text-sigi fs-l">Correo electrónico:</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-sigi">
                                Enviar correo de recuperación de cuenta
                            </button>
                        </div>
                    </div>
            </form>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <center><img src={{asset('images/reset.png')}}  class="img-responsive p-h-20"></center>
        </div>
        <div class="col-md-1">
        </div>        
    </div>
</div>
@endsection
