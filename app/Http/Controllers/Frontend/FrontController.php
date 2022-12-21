<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index() {
        $slider = Slider::where('status', '0')->get();
        return view('frontend.index', compact('slider'));
    }

    public function category() {
        $category = Catagory::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('category'));
    }

}
