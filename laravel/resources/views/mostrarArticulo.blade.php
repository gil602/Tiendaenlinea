@extends('layouts.app')

@section('title','Productos' )

@section('content')
<div class="text-center products-container">
	<div class="text-center products-container">
	@foreach($products as $product)

	@include("products.product",["product" => $product])
	</div>
	@endforeach
</div>
</div>
<div class="pagination">
{{$products->links()}}
</div>
@endsection