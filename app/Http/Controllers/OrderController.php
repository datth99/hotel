<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::query()->select('*')->with(['customer', 'room', 'service'])->orderBy('id', 'DESC')->paginate(10);
        return view('order.list-order', compact('order'));
    }

    public function payment($id)
    {
        $result = Order::where('id', '=', $id)->update([
            'status' => 0
        ]);
        $order = Order::query()->select('*')->with(['customer', 'room', 'service'])->orderBy('id', 'DESC')->paginate(10);
        return view('order.list-order', compact('order'));
    }
}
