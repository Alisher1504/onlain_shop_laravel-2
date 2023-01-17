<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'website_name',
        'website_url',
        'page_title',
        'meta_keyvords',
        'meta_description',

        'address',
        'phone1',
        'phone2',
        'email1',
        'email2',

        'facebook',
        'telegram',
        'instagram',
        'youtube',
    ];
}