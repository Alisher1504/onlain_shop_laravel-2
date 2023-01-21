<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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


    public function viewPassword() {
        return view('frontend.profil.updatepass');
    }

    public function currentPassword(Request $request) {

        $validator = Validator::make($request->all(),[
            'current_password' => 'required|string|min:8',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $password_check = Hash::check($request->current_password, auth()->user()->password);

        if($password_check) {
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->back()->with('status', 'password Update successfully');

        } else {

            return redirect()->back()->with('status', 'Current password does not math wuth old password');

        }

    }


}
