<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catagory extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_keyword',
        'meta_title',
        'meta_description',
        'status'
    ];

    public function product() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
