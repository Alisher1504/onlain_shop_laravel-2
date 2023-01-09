<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}