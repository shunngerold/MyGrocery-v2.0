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
}
