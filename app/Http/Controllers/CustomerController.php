<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customer = Customer::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('customer.list-customer', compact('customer'));
    }

    public function add(){
        return view('customer.add-customer');
    }

    public function store(Request $request){
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->passport = $request->passport;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        return redirect()->route('customer');
    }

    public function edit($id){
        $customer = Customer::query()->where('id', $id)->first();
        return view('customer.edit-customer', compact('customer'));
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->passport = $request->passport;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        $customer->update();

        return redirect('customer')->with('status','Cập nhật dữ liệu thành công');
    }

    public function delete($id) {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('status','Xóa dữ liệu thành công');
    }

    public function history($id)
    {
        $order = Order::query()->select('*')->with(['customer', 'room', 'service'])->where('customer_id', '=', $id)->orderBy('id', 'DESC')->paginate(10);
        return view('customer.list-history', compact('order'));
    }

}
