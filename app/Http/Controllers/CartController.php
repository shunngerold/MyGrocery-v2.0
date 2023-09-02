<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Show Cart
    public function show_cart(Cart $cart) {
        return view('user.cart');
    }
    // Add to cart
    public function add_to_cart(Cart $cart, Products $product, Request $request) {
        try {
            $cart::AddtoCart($product, $request);
            return back()->with('message','Product Added to your cart successfully!');
        } catch(Exception $e) {
            abort(404);
        }
    }
    // Count cart data
    public function cartCount(Cart $cart) {
       return $cart::CartCount();
    }
}
