<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home');

Route::get('/carrito', 'ShoppingCartsController@index');

Auth::routes();

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController',['only' => ['store','destroy']]);

Route::get('/home', 'HomeController@index');

Route::get('/editarProduct/{id}','ProductsController@edit');

Route::post('/actualizarProduct/{id}','ProductsController@update');

Route::get('/eliminarProduct/{id}','ProductsController@eliminar');

Route::get('/products/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");

	if(!\File::exists($path)) abort(404);

	$file = \File::get($path);

	$type = \File::mimeType($path);

	$response = Response::make($file,200);

	$response->header("Content-Type",$type);

	return $response;
});

Route::get('admin', 'AdminController@admin');
	Route::group(['prefix' => 'admin'], function () {   
	});

Route::get('/mostrarArticulo', 'ProductsController@mostrarp');

Route::get('/eliminarcProduct/{id}','InShoppingCartsController@destroy');

Route::get('/camaras', 'ProductsController@product1');

Route::get('/red', 'ProductsController@product2');

Route::get('/energia', 'ProductsController@product3');

Route::get('/registrarUsuarios', 'AdminController@registrarUsuarios');

Route::post('/guardarUsuario', 'AdminController@guardarUsuario');

Route::get('/consultarUsuarios', 'AdminController@consultarUsuarios');

Route::get('/registrarAdmin','AdminController@registrarAdmin');

Route::get('/guardaradmin','AdminController@guardaradmin');

