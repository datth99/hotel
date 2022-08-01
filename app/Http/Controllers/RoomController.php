<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list(){
        $room = Room::query()->select('*')->orderBy('id', 'ASC')->paginate(10);
        return view('room.list-room', compact('room'));
    }

    public function add(){
        return view('room.add-room');
    }

    public function store(Request $request){
        $room = new Room();

        $room->level = $request->level;
        $room->name = $request->name;
        $room->detail = $request->detail;
        $room->status = $request->status;
        $room->price = $request->price;

        $room->save();
        return redirect()->route('room');
    }

    public function edit($id){
        $room = Room::find($id);
        return view('room.edit-room', compact('room'));
    }

    public function update(Request $request, $id) {
        $room = Room::find($id);

        $room->level = $request->level;
        $room->name = $request->name;
        $room->detail = $request->detail;
        $room->status = $request->status;
        $room->price = $request->price;

        $room->update();
        return redirect('room')->with('status','Cập nhật dữ liệu thành công');
    }

    public function delete($id) {
        $room = Room::find($id);
        $room->delete();
        return redirect('room')->with('status','Xóa dữ liệu thành công');
    }
}
