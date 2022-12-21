<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
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

    public function products($category_slug) {
        // $category = Catagory::where('slug', $category_slug)->get();
        // if($category) {
        //     $product = $category->product()->get();
        //     return view('frontend.collections.product.index', compact('product', 'category'));
        // }
        // else{
        //     return redirect()->back();
        // }

        if(Catagory::where('slug', $category_slug)->exists()) {

            $category = Catagory::where('slug', $category_slug)->first();
            $product = Product::where('category_id', $category->id)->where('status', '0')->get();
            return view('frontend.collections.product.index', compact('category', 'product'));

        }
        else{
            return redirect('/')->with('status', 'category does not');  
        }
        
    }

}
