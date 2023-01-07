<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brend',
        'image',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',

    ];
    public function category() {
        return $this->belongsTo(Catagory::class, 'category_id', 'id');
    }

    // public function productImage() {
    //     return $this->hasMany(Product::class, 'product_id', 'id');
    // }

}
