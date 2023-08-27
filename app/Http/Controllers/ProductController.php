<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
