<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    public function show(){
        $cart = \Session::get('cart');
        return view('store.card', compact('cart'));
    }

    public function add(Product $product){
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
}
