@extends("layouts.app");

@section("content")
<div class="big-padding text-center blue-grey white-text">
	<h1>Crear Producto</h1>
</div>
<div class="container white">
<form enctype="multipart/form-data" action="{{url('/products')}}" method="POST" >
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="codigo">Codigo:</label>
		<input type="number" class="form-control" name="codigo" required>
	</div>
	<div class="from-group">
		<label for="costo">Costo:</label>
		<input type="number" class="form-control" name="costo" required>
	</div>
	<div class="from-group">
		<label for="title">Titulo:</label>
		<input type="text" class="form-control" name="title" required>
	</div>
	<div class="from-group">
		<label for="pricing">Precio:</label>
		<input type="number" class="form-control" name="pricing" required>
	</div>

	<div class="from-group">
		<label for="cover">imagen:</label>
		<input type="file" class="field" name="cover" required>
	</div>
	<div class="from-group">
	    <label for="categoria">Categoria:</label>
		<select name="categoria" class="form-control">

    				<option value="0" selected>Camaras</option>

    				<option value="1" >Red</option>

    				<option value="2">Energia</option>

		 

		</select>
		</div>


	<div class="from-group">
		<label for="description">Descripcion:</label>
		<input type="textarea" class="form-control" name="description" required>
	</div>			

	<br>
		<br>

	<div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="{{url('/products')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
</div>
	
@endsection