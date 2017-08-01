<div class="product text-left" class="card">
	@if(Auth::check() && $product->user_id == Auth::user()->id)
			<div class="absolute" class="actions">
			<td><a href="{{url('/editarProduct')}}/{{$product->id}}">Editar</a></td>
			<td><a href="{{url('/eliminarProduct')}}/{{$product->id}}">Eliminar</a></td>	
			</div>
	@endif
	<td><a href="{{url('/products')}}/{{$product->id}}"><h1>{{$product->title}}</h1></a>
	<div class="row">
		<div class="col-sm-6 col-sx-12">
			@if($product->extension)
	<img src="{{url("/products/images/$product->id.$product->extension")}}" class="product-avatar">
			@endif
		</div>
		<div class="col-sm-6 col-sx-12">
		<p>
			<strong>Descripcion</strong>
		</p>

		<p>
			{{$product->description}}</p>
			<strong>Precio</strong>
			{{$product->pricing}}
		
		<p>
		@include("in_shopping_carts.form",["product" => $product])
		</p>
		</div>
		</div>
	</div>