<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brends;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index() {
        $slider = Slider::where('status', '0')->get();
        $trendingProduct = Product::where('trending', '1')->lastest()->take(15)->get();
        return view('frontend.index', compact('slider', 'trendingProduct'));
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
            $brend = Brends::all();
            $category = Catagory::where('slug', $category_slug)->first();
            $product = Product::where('category_id', $category->id)->where('status', '0')->get();
            return view('frontend.collections.product.index', compact('category', 'product', 'brend'));

        }
        else{
            return redirect('/')->with('status', 'category does not');  
        }
        
    }


    public function productsview(string $category_slug, string $product_slug) {

        $category = Catagory::where('slug', $category_slug)->first();
        if($category) {
            $product = $category->product()->where('slug', $product_slug)->where('status', '0')->first();
            if($product){
                return view('frontend.collections.product.view', compact('product','category'));
            } else {
                return redirect()->back();
            }
            
        }
        else{
            return redirect()->back();
        }

    }

    public function thankYou() {
        return view('frontend.thanksYou');
    }


}
