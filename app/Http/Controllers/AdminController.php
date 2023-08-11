<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // show dashboard
    public function dashboard_admin() {
        return view('admin.dashboard');
    }
    // show products
    public function products_admin(Request $request, Products $products) {
        return view('admin.products.product',[
            'products' => $products::latest()
            ->filter(request(['search']))
            ->paginate(4)
        ]);
    }
    // show add product page
    public function add_product() {
        return view('admin.products.add');
    }
    // show deliveries
    public function deliveries_admin() {
        return view('admin.deliveries');
    }
    // show sales
    public function sales_admin() {
        return view('admin.sales');
    }
    // show logs
    public function logs_admin() {
        return view('admin.logs');
    }
    // show profile
    public function profile_admin() {
        return view('admin.profile');
    }
    // show config
    public function config_admin() {
        return view('admin.config');
    }
    public function new_product(Request $request) {
        $validateProduct = $request->validate([
            'product_image' => ['required'],
            'product_name' => ['required','regex:/^[A-Za-z]+$/'],
            'category' => ['required'],
            'price' => ['required','regex:/^\d+$/'],
            'stock' => ['required','regex:/^\d+$/'],
            'description' => ['required','max:100'],
            'date_in_wh' => ['required'],
            'date_expiry' => ['required'],
            'active' => ['regex:/^(1|null)$/'],
        ]);

        if ($request->hasFile('product_image')) {
            $validateProduct['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        
        Products::create($validateProduct);
        return redirect(route('admin.add.product'))->with('message','Successfuly Added!');
    }
}
