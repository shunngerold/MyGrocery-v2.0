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
    protected function AddtoCart($product)
    {   
        $exist_product = self::where('product_id',$product->id)->where('user_id',Auth::user()->id)->first();

        if ($exist_product) {
            $updated_qty = $exist_product->quantity + 1;
            $exist_product->update([
                'quantity' => $updated_qty,
            ]);
        } else {
            $cartList = [
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'product_image' => $product->product_image,
                'product_name' => $product->product_name,
                'category' => $product->category,
                'price' => $product->price,
                'stock' => $product->stock,
                'description' => $product->description,
                'date_in_wh' => $product->date_in_wh,
                'date_expiry' => $product->date_expiry,
                'active' => $product->active,
            ];

            self::create($cartList);
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
