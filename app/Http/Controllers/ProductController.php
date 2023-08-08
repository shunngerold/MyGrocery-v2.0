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
            ->paginate(10)
        ]);
    }
}
