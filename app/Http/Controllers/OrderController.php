<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request) {
        $where = [];

        if ($request->has('status')) {
            $where['status'] = $request->status;
        }

        $orders = Order::where($where)->get();
        return view('panel.orders', ['orders' => $orders]);
    }
}
