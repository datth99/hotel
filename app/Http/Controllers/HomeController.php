<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Room;

class HomeController extends Controller
{
    public function home(){
    	$customer = Customer::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
    	$number_customer = count($customer);

    	$room = Room::query()->select('*')->orderBy('id', 'ASC')->paginate(10);
		$number_room = count($room);

        return view('home', compact('number_customer', 'number_room'));
    }
}
