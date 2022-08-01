<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function list(){
        $service = Service::query()->select('*')->orderBy('id', 'ASC')->paginate(5);
        return view('service.list-service', compact('service'));
    }

    public function add(){
        return view('service.add-service');
    }

    public function store(Request $request){
        $service = new Service();

        $service->name = $request->name;
        $service->price = $request->price;

        $service->save();
        return redirect()->route('list-service');
    }

    public function edit($id){
        $service = Service::find($id);
        return view('service.edit-service', compact('service'));
    }

    public function update(Request $request, $id) {
        $service = Service::find($id);

        $service->name = $request->name;
        $service->price = $request->price;

        $service->update();
        return redirect('service')->with('status','Cập nhật dữ liệu thành công');
    }

    public function delete($id) {
        $service = Service::find($id);
        $service->delete();
        return redirect('service')->with('status','Xóa dữ liệu thành công');
    }
}
