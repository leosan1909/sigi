@extends('layouts.app')
@section('content')
@include('includes.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.menu')
        </div>
        <div class="col-md-9">
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-md-12">
            			<div class="panel panel-default">
            				<div class="panel-heading">Editar usuario</div>
                            <div class="panel-body">
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
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" name="email" class="form-control"  value="{{ old('email', $user->email) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}"">
                                    </div>
            						<div class="form-group">
            							<label for="pass">Contraseña:<br/><em>Ingresar solamente si se desea modificar.</em></label>
            							<input type="text" name="pass" class="form-control" value={{ old('pass',str_random(10)) }}>
            						</div>          						            						
                                    <button class="btn btn-default">Guardar cambios</button>
            					</form>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection
