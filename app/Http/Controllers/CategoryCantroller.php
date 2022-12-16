<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryCantroller extends Controller
{
    public function index() {
        $category = Catagory::all();
        return view('admin.category.index', compact('category'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {

        $category = new Catagory();

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');

        if($request->hasFile('image')){

            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/category', $filename);
            $category->image = $filename;

        }

        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';

        $category->save();

        return redirect('admin/category')->with('status', 'Category create successfully');

    }

    public function edit(Request $request, $id) {
        $category = Catagory::find($id);
        return view('admin.category.edit', compact('category'));

    }

    public function update(Request $request, $id) {

        $category = Catagory::find($id);

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');

        if($request->hasFile('image')){
            
            $path = 'uploads/category'. $category->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/category', $filename);
            $category->image = $filename;

        }

        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';

        $category->update();

        return redirect('admin/category')->with('status', 'Category Edit successfully');

    }

    public function delete($id) {
        
        $delete = Catagory::find($id);
        $path = 'uploads/category/'. $delete->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $delete->delete();
        return redirect('admin/category')->with('status', 'Category Deloete successfully');

    }

}