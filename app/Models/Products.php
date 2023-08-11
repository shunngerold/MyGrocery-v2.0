<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_image',
        'product_name',
        'category',
        'price',
        'stock',
        'description',
        'date_in_wh',
        'date_expiry',
        'active',
    ];

    protected function scopeFilter($query, array $filters) {
        if ($filters['category'] ?? false) {
            $query->where('category','like',request('category'));
        } 

        if($filters['search'] ?? false) {
            $query
            ->orWhere('product_name','like','%'.request('search').'%')
            ->orWhere('category','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('date_in_wh','like','%'.request('search').'%')
            ->orWhere('date_expiry','like','%'.request('search').'%');
        }
    }
}
