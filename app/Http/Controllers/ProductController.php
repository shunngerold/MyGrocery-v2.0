<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // show all products
    public function show_products(Request $request, Products $products) {
        try {
            return view('user.product-content',[
                'products' => $products::latest()
                ->filter(request(['category']))
                ->paginate(20)
            ]);
        } catch (ModelNotFoundException $e) {
            // Handle the case when the product is not found
            abort(404);
        }
    }
    // show specific product
    public function show_spec_products(Products $product) {
        try {
            return view('user.specific-product', ['product' => $product]);
        } catch (ModelNotFoundException $e) {
            // Handle the case when the product is not found
            abort(404);
        }
    }
    // Add to cart
    public function add_to_cart(Products $product) {
        dd($product);
        // $productData = $product::getProductFields($product->id, ['product_image','product_name','category','price','stock','description','date_in_wh','date_expiry','active']);
        $cartList = [];
        return redirect(route('user.products'))->with('message','Product Added to your cart successfully!');
    }
}
