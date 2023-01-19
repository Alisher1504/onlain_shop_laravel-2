<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index() {

        $product = Product::count();
        $category = Catagory::count();

        $totalUser = User::count();
        $user = User::where('role_as', '0')->count();
        $admin = User::where('role_as', '1')->count();

        $todaydate = Carbon::now()->format('d-m-y');
        $todaymon = Carbon::now()->format('m');
        $todayyear = Carbon::now()->format('y');

        $totalorder = Order::count();
        $todayOrder = Order::where('created_at', $todaydate)->count();
        $monOrder = Order::where('created_at', $todaymon)->count();
        $yearOrder = Order::where('created_at', $todayyear)->count();

        return view('admin.index', compact('product', 'category','totalUser', 'user', 'admin', 'totalorder', 'todayOrder', 'monOrder', 'yearOrder'));

    }

}
