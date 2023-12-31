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
        return $cart::ShowCart();
    }
    // Add to cart
    public function add_to_cart(Cart $cart, Products $product, Request $request) {
        try {
            return $cart::AddtoCart($product, $request);
        } catch(Exception $e) {
            abort(404);
        }
    }
    // Show checkout form
    public function checkoutForm(Request $request) {
        return view('user.checkout-form');
    }
    // Count cart data
    public function cartCount(Cart $cart) {
       return $cart::CartCount();
    }
}
