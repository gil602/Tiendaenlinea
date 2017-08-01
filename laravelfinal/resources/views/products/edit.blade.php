@extends("layouts.app");

@section("content")
<form action="{{url('/actualizarProduct')}}/{{$products->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="from-group">
		<label for="codigo">codigo:</label>
		<input type="number" class="form-control" name="codigo" required value="{{$products->codigo}}">
	</div>
	<div class="from-group">
		<label for="costo">Costo:</label>
		<input type="number" class="form-control" name="costo" required value="{{$products->costo}}">	
	<div class="from-group">
		<label for="title">Titulo:</label>
		<input type="text" class="form-control" name="title" required value="{{$products->title}}">
	</div>
	<div class="from-group">
		<label for="pricing">Precio:</label>
		<input type="number" class="form-control" name="pricing" required value="{{$products->pricing}}">

	</div>

		<div class="from-group">
		<label for="cover">Imagen:</label>
		<input type="file" class="form-control" name="cover" required value="{{$products->extension}}">

	</div>

	<div class="from-group">
	    <label for="categoria">Categoria:</label>
		<select name="categoria" class="form-control">
		            @if($products->categoria==0)
    				<option value="0" selected>Camaras</option>
    				@elseif($products->categoria==1)
    				<option value="1" >Red</option>
    				@elseif($products->categoria==2)
    				<option value="2">Energia</option>
    				@endif
		 
			<option value="0" selected>Camaras</option>
			<option value="1">Red</option>
			<option value="2">Energia</option>
			
		</select>	
	<div class="from-group">
		<label for="description">Descripcion:</label>
		<input type="textarea" class="form-control" name="description" required value="{{$products->description}}">

	</div>
	<br>
		<br>

	<div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="{{url('/products')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@endsection