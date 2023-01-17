<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    
    public function index() {

        return view('admin.settings.index');

    }

    public function store(Request $request) {

        $settings = Settings::first();

        if($settings) {

        } else {

            Settings::create([
                'website_name' => $request->website_name,
                'website_url' => $request->website_url,
                'page_title' => $request->page_title,
                'meta_keyvords' => $request->meta_keyvords,
                'meta_description' => $request->meta_description,

                'address' => $request->address,
                'phone1' => $request->phone1,
                'phone2' => $request->phone2,
                'email1' => $request->email1,
                'email2' => $request->email2,

                'facebook' => $request->facebook,
                'telegram' => $request->telegram,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
            ]);

            return redirect()->back()->with('message', 'Setting add successfully');

        }
        
        return redirect()->back()->with('message', 'Setting add successfully');
    }

}
