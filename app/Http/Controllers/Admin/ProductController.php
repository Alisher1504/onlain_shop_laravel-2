<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brends;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return view('admin.product.index');
    }

    public function create(){
        $categorys = Catagory::all();
        $brends = Brends::all();
        return view('admin.product.create', compact('categorys', 'brends'));
    }
}
