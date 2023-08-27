<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ======================== ADMIN SIDE ===========================>
Route::prefix('/admin')->middleware('isAdmin')->group(function() {
    // Show dashboard page
    Route::get('/dashboard', [AdminController::class, 'dashboard_admin'])->name('admin.dashboard');
    // Show products page
    Route::get('/products', [AdminController::class, 'products_admin'])->name('admin.products');
    // Show deliveries page
    Route::get('/deliveries', [AdminController::class, 'deliveries_admin'])->name('admin.deliveries');
    // Show sales page
    Route::get('/sales', [AdminController::class, 'sales_admin'])->name('admin.sales');
    // Show logs page
    Route::get('/logs', [AdminController::class, 'logs_admin'])->name('admin.logs');
    // Show profile page
    Route::get('/profile', [AdminController::class, 'profile_admin'])->name('admin.profile');
    // Show config page
    Route::get('/config', [AdminController::class, 'config_admin'])->name('admin.config');
    // Add product
    Route::get('/add-product', [AdminController::class, 'add_product'])->name('admin.add.product');
    // Add new product
    Route::post('/new-product', [AdminController::class, 'new_product'])->name('admin.new.product');
});

// ======================== OTHER ROUTES ===========================>
// Show welcome page
Route::get('/', [UserController::class, 'landing'])->name('index');
// show cart count
Route::get('/cart-count', [CartController::class, 'cartCount'])->name('cart.count');
// Logout user
Route::post('/logout', [UserController::class, 'userLogout'])->middleware('auth')->name('logout');
// Google Login
Route::get('/redirect', [UserController::class, 'redirect'])->middleware('guest')->name('redirect');
Route::get('/callback', [UserController::class, 'callback'])->middleware('guest')->name('callback');

// ======================== USER SIDE ===========================>
Route::prefix('/user')->group(function() {
    // Show login page
    Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('user.login');
    // User authenticate
    Route::post('/authenticate', [UserController::class, 'user_authenticate'])->middleware('guest')->name('user.auth');
    // Show register page
    Route::get('/register', [UserController::class, 'register'])->middleware('guest')->name('user.register');
    // User new
    Route::post('/new', [UserController::class, 'user_new'])->middleware('guest')->name('user.new');
    // Show products
    Route::get('/products', [ProductController::class, 'show_products'])->name('user.products');
    // Show specific product
    Route::get('/specific-product/{product}', [ProductController::class, 'show_spec_products'])->where('products', '[0-9]+')->name('user.spec.products');
    // Add-to-cart
    Route::get('/add-to-cart/{product}', [CartController::class, 'add_to_cart'])->where('products', '[0-9]+')->middleware('auth')->name('user.add.cart');// Show products
});