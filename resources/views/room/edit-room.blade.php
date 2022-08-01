@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('room')}}">
                        <em class="fa fa-user"></em>
                    </a>
                </li>
                <li class="active">Phòng nghỉ</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Chỉnh sửa phòng nghỉ</h3>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="room/{{ $room->id }}/update">
                    @csrf
                    <div class="form-group">
                        <label>Tên phòng </label>
                        <input class="form-control" name="name" placeholder="Nhập tên phòng" value="{{ $room->name }}" required>
                        @error('room')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Loại phòng</label>
                        <select class="form-control custom-select" name="level" required>
                            <option value="1">VIP I</option>
                            <option value="2">VIP II</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giá phòng ( 1H )</label>
                        <input type="number" class="form-control" name="price" placeholder="Nhập giá phòng "  value="{{ $room->price }}"  required>
                        @error('price')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control custom-select" name="status" required>
                            <option value="1">Còn phòng</option>
                            <option value="0">Đã thuê</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea class="form-control" name="detail" placeholder="Nhập chi tiết phòng nghỉ" required>{{ $room->detail }}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{route('room')}}" class="btn btn-default">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.main-->
@endsection

