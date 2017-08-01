<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Product;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view("products.index",["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view("products.create",["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hasFile = $request->hasFile('cover') && $request->cover->isValid();

        $product = new Product;

        $product->codigo = $request->codigo;
        $product->costo = $request->costo;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->categoria = $request->categoria;
        $product->pricing = $request->pricing;

        $product->user_id = Auth::user()->id;
        if($hasFile){
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }

        if($product->save()){

            if($hasFile){
                $request->cover->storeAs('images',"$product->id.$extension");
            }
        return redirect("/products");       
        }else{
            return view("products.create");
        }
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=DB::table('products')
        ->where('products.id','=', $id)
        ->select('products.*')
        ->first();


        return view('products.show', compact('product'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=DB::table('products')
        ->where('products.id','=', $id)
        ->select('products.*')
        ->first();

        return view('products.edit', compact('products'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $datos)
    {
        $product=product::find($id);
        $product->codigo=$datos->input('codigo');
        $product->costo=$datos->input('costo');
        $product->title=$datos->input('title');
        $product->pricing=$datos->input('pricing');
        $product->categoria=$datos->input('categoria');
        $product->description=$datos->input('description');        
        $product->save();

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function eliminar($id){
        $product=Product::find($id);
        $product->delete();

        return redirect('/products');


    }
public function mostrarp (){

$products = Product::latest()->simplePaginate(5);

    return view('mostrarArticulo',["products" => $products]);

}

public function product1(){
 $products=DB::table('products')
 ->where('products.categoria','=','0')
 ->select('products.*')
 ->get();

    return view('products.camaras',compact('products'));

}
public function product2(){
 $products=DB::table('products')
 ->where('products.categoria','=','1')
 ->select('products.*')
 ->get();

    return view('products.red',compact('products'));

}

public function product3(){
 $products=DB::table('products')
 ->where('products.categoria','=','2')
 ->select('products.*')
 ->get();

    return view('products.energia',compact('products'));

}
  
}

