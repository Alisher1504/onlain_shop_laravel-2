<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brends;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Main;

class FrontController extends Controller
{
    public function index() {
        $newArrive = Product::latest()->take(16)->get();
        $slider = Slider::where('status', '0')->get();
        $trendingProduct = Product::where('trending', '1')->latest()->take(15)->get();
        return view('frontend.index', compact('slider', 'trendingProduct', 'newArrive'));
    }

    public function search(Request $request) {

        if($request->search) {
            $searchProduct = Product::where('name', 'LIKE', '%'.$request->search.'%')->latest()->paginate(1);
            return view('frontend.pages.search', compact('searchProduct'));
        } else {
            return redirect()->back()->with('message', 'Empty search');
        }

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

    public function newArrivals() {

        $newArrive = Product::latest()->take(16)->get();
        return view('frontend.pages.new-arrive', compact('newArrive'));

    }

    public function featured() {

        $featured = Product::where('featured', '1')->latest()->get();
        return view('frontend.pages.featured-arrive', compact('featured'));

    }


}
