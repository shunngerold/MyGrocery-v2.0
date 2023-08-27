<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Add to cart
    public function add_to_cart(Cart $cart, Products $product) {
        $cart::AddtoCart($product);
        return redirect(route('user.products'))->with('message','Product Added to your cart successfully!');
    }
    // Count cart data
    public function cartCount(Cart $cart) {
       return $cart::CartCount();
    }
}
