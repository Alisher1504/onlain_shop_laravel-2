<?php

namespace App\Http\Controllers;

use App\Models\Brends;
use Illuminate\Http\Request;

class BrendController extends Controller
{
    public function index() {
        $brends = Brends::all();
        return view('admin.brends.index', compact('brends'));
    }

    public function create(Request $request) {

        $brend = new Brends();

        $brend->name = $request->name;
        $brend->slug = $request->slug;
        $brend->status = $request->status == TRUE ? '1' : '0';

        $brend->save();

        return redirect('admin/brends')->with('status', 'Brend Create successfully');

    }

}
