<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{
    public function index() {

        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));

    }

    public function create() {
        return view('admin.users.create');
    }
}
