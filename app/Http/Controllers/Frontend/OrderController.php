<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {

        $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.order.index', compact('order'));
    }

    public function show($id){

        $order = Order::where('user_id', Auth::user()->id)->where('id', $id)->first();

        if($order){
            return view('frontend.order.show', compact('order'));
        } else {
            return redirect()->back();
        }

        

    }
}
