<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
// use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        $categorys = Catagory::all();
        return view('admin.product.create', compact('categorys'));
    }

    // public function store(ProductFormRequest $request){

    //     $validateForm = $request->validate();

    //     $category = Catagory::finOrFile($validateForm['category_id']);

    //     $product = $category->product()->create([
    //         'category_id' => $validateForm['category_id'],
    //         'name' => $validateForm['name'],
    //         'slug' => Str::slug($validateForm['slug']),
    //         'brend' => $validateForm['brend'],
    //         'small_description' => $validateForm['small_description'],
    //         'description' => $validateForm['description'],
    //         'original_price' => $validateForm['original_price'],
    //         'selling_price' => $validateForm['selling_price'],
    //         'quantity' => $validateForm['quantity'],
    //         'trending' => $validateForm['trending'],
    //         'status' => $validateForm['status'],
    //         'meta_title' => $validateForm['meta_title'],
    //         'meta_keyword' => $validateForm['meta_keyword'],
    //         'meta_description' => $validateForm['meta_description'],
    //     ]);

    //     if($request->hasfile('image')) {
    //         $path = 'uploads/products/';

    //         $i = 1;
    //         foreach($request->image as $imageFile) {
    //             $ext = $imageFile->getClientOriginalExtension();
    //             $filename = time().$i++. '.' . $ext;
    //             $imageFile->move($path, $filename);
    //             $finalImagePathName = $path. $filename;

    //             $product->productImage()->create([
    //                 'product_id' => $product->id,
    //                 'image' => $finalImagePathName
    //             ]);
    //         }

    //     }

    //     return redirect('admin/product')->with('status', 'Product add successfully');

    // }


    public function store(Request $request) {

        $product = new Product();

        if($request->hasfile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;

        }

        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->featured = $request->input('featured') == TRUE ? '1' : '0';
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');
        $product->save();
        return redirect('admin/product')->with('status', 'Product add successfully');
    }

    public function edit($id) {
        $categorys = Catagory::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product', 'categorys'));
    }

    public function update(Request $request, $id) {

        $product = Product::find($id);

        if($request->hasfile('image')) {
            $path = 'uploads/product/'. $product->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;

        }

        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->featured = $request->input('featured') == TRUE ? '1' : '0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->meta_description = $request->input('meta_description');
        $product->update();

        return redirect('admin/product')->with('status', 'Product update successfully');

    }

    public function delete($id) {

        $delete = Product::find($id);

        $path = 'update/products/'. $delete->image;

        if(File::exists($path)){
            File::delete($path);
        }

        $delete->delete();

        return redirect('admin/product')->with('status', 'Product Delete successfully');

    }

}
