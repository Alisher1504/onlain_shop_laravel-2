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

    public function create() {
        return view('admin.brends.create');
    }

    public function store(Request $request) {

        $brend = new Brends();

        $brend->name = $request->name;
        $brend->slug = $request->slug;
        $brend->status = $request->status == TRUE ? '1' : '0';

        $brend->save();

        return redirect('admin/brends')->with('status', 'Brend Create successfully');

    }

    public function update($id) {
        $brends = Brends::find($id);
        return view('admin.brends.edit', compact('brends'));
    }

    public function edit(Request $request, $id) {

        $brend = Brends::find($id);

        $brend->name = $request->name;
        $brend->slug = $request->slug;
        $brend->status = $request->status == TRUE ? '1' : '0';

        $brend->update();
        return redirect('admin/brends')->with('status', 'Brends update successfully');

    }

    public function delete($id) {
        $brends = Brends::find($id);
        $brends->delete();
        return redirect('admin/brends')->with('status', 'brends delete successfully');
    }

}
