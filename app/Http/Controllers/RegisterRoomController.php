<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class RegisterRoomController extends Controller
{
    public function index()
    {
        $customer = Customer::query()->select('*')->orderBy('id', 'DESC')->get();
        $room = Room::query()->select('*')->orderBy('id', 'DESC')->get();
        $service = Service::query()->select('*')->orderBy('id', 'DESC')->get();
        return view('register-room.index', compact('customer', 'room', 'service'));
    }

    public function store(Request $request)
    {
        $order = new Order();

        $order->customer_id = $request->customer_id;
        $order->room_id = $request->room_id;
        $order->day = $request->day;
        $order->service_id = $request->service_id;
        $order->status = 1;

        $order->save();

        return redirect()->route('order');
    }
}
