<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function index() {
        
        $todayData = Carbon::now();
        $order = Order::whereDate('created_at', $todayData)->paginate(10);
        return view('admin.myzagas.index', compact('order'));
    }
}
