<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {

        $validate = Validator::make($request->all(),[
            'name' => ['reuired', 'string', 'max:255'],
            'email' => ['require', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required', 'integer']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,
        ]);

        return redirect('/admin/users')->with('message', 'User create succesfully');

    }

    public function edit($id) {

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));

    }

    public function update(Request $request, $id) {

        $validate = Validator::make($request->all(),[
            'name' => ['reuired', 'string', 'max:255'],
            'email' => ['require', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required', 'integer']
        ]);

        User::findOrFail($id)->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,
        ]);

        return redirect('/admin/users')->with('message', 'User update succesfully');

    }

    public function delete($id) {

        $delete = User::findOrFail($id);
        $delete->delete($id);

        return redirect('/admin/users')->with('message', 'User delete succesfully');

    }

}
