<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    protected $fillable = ['status'];

    public function InShoppingCarts(){
        return $this->hasMany("App\InShoppingCart");
    }


  
    public function products(){
        return $this->belongsToMany('App\Product','in_shopping_carts');
    }
  
    public function productsSize(){
        return $this->products()->count();
    }

    public function total(){
        return $this->products()->sum("pricing");
    }

    //totalUSD(){
       // $this->total()
    //}

    public static function findOrCreateBySessionID($Shopping_cart_id){
    	if($Shopping_cart_id)

    		return ShoppingCart::findBySession($Shopping_cart_id);
    	else
    		return ShoppingCart::createWithoutSession();
    }
    public static function findBySession($Shopping_cart_id){
    		return ShoppingCart::find($Shopping_cart_id);
    }

    public static function createWithoutSession(){

    		return ShoppingCart::create([
    			"status" => "incompleted"
    			]);
    }
}
