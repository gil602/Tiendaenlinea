@extends('layouts.app')

@section('content')
<br>
	<div class="container">
		<h2 class="text-center">REGISTRO DE ADMIN &nbsp;<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></h2>
		<hr>
		<div class="col-xs-8">
			<form action="{{url('/guardaradmin')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="name">Nombre</label>
					<input name="name" type="text" placeholder="Teclea nombre" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input name="email" type="email" placeholder="Teclea correo electrónico" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="sexo">Sexo</label>
					<select name="sexo" class="form-control" required>
                        <option value="" selected="disabled" disabled="select">-- Seleccione una opción --</option>
						<option value="0">Hombre</option>
						<option value="1">Mujer</option>
					</select>
				</div>

				<div class="form-group">
					<label for="password">Contraseña</label>
					<input name="password" type="password" placeholder="Teclea contraseña" class="form-control" required>
				</div>
						<div class="from-group">
					    <label for="role">Admin:</label>
						<select name="role" class="form-control">

    						<option value="1" >Admin</option>		

    				</select>
		</div>

				<button type="submit" class="btn btn-primary">Registrar</button>
				<a href="{{url('/admin')}}" class="btn btn-danger">Cancelar</a><br><br><br>
			</form>
		</div>
	</div>
</div>
@stop
