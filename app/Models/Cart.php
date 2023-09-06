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
        'product_price',
        'cart_price',
        'stock',
        'description',
        'quantity',
        'note',
        'date_in_wh',
        'date_expiry',
        'active',
    ];

    // Add-to-cart
    protected function AddtoCart($product, $request)
    {   
        $cartList = [];
        $qty = $request->input('qty', null);
        $c_price = $request->input('cart_price', null);
        $exist_product = self::where('product_id',$product->id)->where('user_id',Auth::user()->id)->first();

        if ($exist_product) {
            if (is_numeric($qty)) {
                $cartList['quantity'] = $exist_product->quantity + intval($request->qty);
                $cartList['cart_price'] = $exist_product->cart_price + intval($c_price);
                if ($cartList['quantity'] > 100) {
                    return back()->with('message','Your cart quantity has reached 100. Please checkout first.');
                }
                $exist_product->update($cartList);
            } 
            if (is_null($qty)) {
                $cartList['quantity'] = $exist_product->quantity + 1;
                $cartList['cart_price'] = $exist_product->cart_price + $product->price;
                $exist_product->update($cartList);
            }
        } else {
            $cartList['user_id'] = Auth::user()->id;
            $cartList['product_id'] = $product->id;
            $cartList['product_image'] = $product->product_image;
            $cartList['product_name'] = $product->product_name;
            $cartList['category'] = $product->category;
            $cartList['product_price'] = $product->price;
            $cartList['cart_price'] = $c_price ? intval($c_price) : $product->price;
            $cartList['stock'] = $product->stock;
            $cartList['description'] = $product->description;
            $cartList['date_in_wh'] = $product->date_in_wh;
            $cartList['date_expiry'] = $product->date_expiry;
            $cartList['active'] = $product->active;
            $cartList['quantity'] = $qty ? intval($qty) : 1;
            self::create($cartList);
        }
        return back()->with('message','Product Added to your cart successfully!');
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
