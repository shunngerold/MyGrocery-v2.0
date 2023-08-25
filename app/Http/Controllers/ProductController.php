<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // show all products
    public function show_products(Request $request, Products $products) {
        return view('user.product-content',[
            'products' => $products::latest()
            ->filter(request(['category']))
            ->paginate(10)
        ]);
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
