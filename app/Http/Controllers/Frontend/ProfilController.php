<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index() {
        return view('frontend.profil.index');
    }

    public function updateuserDetails(Request $request) {

        // $request->validate([
        //     'username' => ['required', 'string'],
        //     'phone' => ['required', 'digits:10'],
        //     'pin_code' => ['required', 'digits:6'],
        //     'address' => ['required', 'string', 'max:499'],
        // ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'name' => $request->username
        ]);

        $user->userDetails()->updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'phone' => $request->phone,
                'pin_code' => $request->pin_code,
                'address' => $request->address
            ],
        );

        return redirect()->back()->with('message', 'User Details Update and Create successfully');

    }

}
