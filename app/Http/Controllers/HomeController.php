<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Room;

class HomeController extends Controller
{
    public function home(){
    	$customer = Customer::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_customer = count($customer);

    	$room = Room::query()->select('*')->orderBy('id', 'ASC')->get();
		$number_room = count($room);

		$empty_room = Room::query()->select('*')->where('status', '=', 1)->orderBy('id', 'ASC')->get();
		$empty_room = count($empty_room);

        return view('home', compact('number_customer', 'number_room', 'empty_room'));
    }
}
