<?php

namespace App\Models;

use App\Models\User;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'product_image',
        'product_name',
        'category',
        'price',
        'stock',
        'description',
        'quantity',
        'date_in_wh',
        'date_expiry',
        'active',
    ];

    // Add-to-cart
    protected function AddtoCart($product, $request)
    {   
        $cartList = [];
        $qty = $request->input('qty', null);
        $exist_product = self::where('product_id',$product->id)->where('user_id',Auth::user()->id)->first();

        if ($exist_product) {
            if (is_numeric($qty)) {
                $cartList['quantity'] = $exist_product->quantity + intval($request->qty);
                $exist_product->update($cartList);
            } 
            if (is_null($qty)) {
                $cartList['quantity'] = $exist_product->quantity + 1;
                $exist_product->update($cartList);
            }
        } else {
            if (is_numeric($qty) || is_null($qty)) {
                $cartList['user_id'] = Auth::user()->id;
                $cartList['product_id'] = $product->id;
                $cartList['product_image'] = $product->product_image;
                $cartList['product_name'] = $product->product_name;
                $cartList['category'] = $product->category;
                $cartList['price'] = $product->price;
                $cartList['stock'] = $product->stock;
                $cartList['description'] = $product->description;
                $cartList['date_in_wh'] = $product->date_in_wh;
                $cartList['date_expiry'] = $product->date_expiry;
                $cartList['active'] = $product->active;
                $cartList['quantity'] = 1;
                self::create($cartList);
            } 
        }
    }   
    protected function CartCount()
    {   
        $count_product = self::where('user_id',Auth::user()->id)->count();
        if($count_product) {
            return response()->json(['count' => $count_product]);
        } else {
            return response()->json(['count' => 0]);
        }
    }
    // Relationship to user
    protected function user(User $user) {
        return $this->belongsTo($user::class, 'user_id');
    }
    // Relationship to products
    protected function products(Products $product) {
        return $this->belongsTo($product::class, 'product_id');
    }
}
