<?php

namespace App\Http\Controllers\Admin;

use App\Models\Colors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    
    public function index() {
        $color = Colors::all();
        return view('admin.colors.index', compact('color'));
    }

    public function create() {
        return view('admin.colors.create');
    }

    public function store(Request $request){

        $color = new Colors();

        $color->name = $request->name;
        $color->color = $request->color;
        $color->status = $request->status == TRUE ? '1' : '0';
        $color->save();

        return redirect('admin/colors')->with('status', 'Color create successfully');
    }

    public function edit($id) {
        $color = Colors::find($id);
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, $id){

        $color = Colors::find($id);

        $color->name = $request->name;
        $color->color = $request->color;
        $color->status = $request->status == TRUE ? '1' : '0';
        $color->update();

        return redirect('admin/colors')->with('status', 'Color update successfully');

    }

    public function delete($id) {
        $delete = Colors::find($id);
        $delete->delete();

        return redirect('admin/colors')->with('status', 'Color delete successfully');
    }

}
