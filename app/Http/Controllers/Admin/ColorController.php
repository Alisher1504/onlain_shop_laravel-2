<?php

namespace App\Http\Controllers\Admin;

use App\Models\Colors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    
    public function index() {
        return view('admin.colors.index');
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

}
