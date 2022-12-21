<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

use Illuminate\Validation\Validator;
use App\Http\Requests\SliderFormRequest;

class SliderController extends Controller
{
    public function index() {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    public function create() {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request) {
        
        $validate = $request->validated();

        if($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' .$ext;
            $file->move('uploads/slider/', $filename);
            $validate['image'] = "uploads/slider/$filename";

        }

        $validate['status'] = $request->status == TRUE ? '1' : '0';

        Slider::create([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'image' => $validate['image'],
            'status' => $validate['status']
        ]);

        return redirect('admin/slider')->with('status', 'Slider create successfully');

    }

}