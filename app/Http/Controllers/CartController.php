<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function index()
    {
        $user=auth()->user();

        $cart=$user->cart;
        return view('cart',compact('cart'));
    

    }
    public function add(Product $product,Request $request){

        $user=auth()->user();

        $cart=$user->cart;

        if($cart->products->contains('id',$product->id)){
            dd('این محصول در سبد خرید شما موجود است');
        }else{

                $cart->products()->attach($product->id,['number'=>$request->number]);



        }

    }




    public function delete(Product $product){
        $user=auth()->user();
        $cart=$user->cart;
        $cart->products()->detach($product);

    }
}
