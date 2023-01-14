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
}
