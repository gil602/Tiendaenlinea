<form action="{{url('/in_shopping_carts')}}" method="POST" class="inline-block">
{{csrf_field()}}
<input type="hidden" name="product_id"	value="{{$product->id}}">
<input type="submit" value="Agregar al carrito"	class="btn btn-info">	
</form>