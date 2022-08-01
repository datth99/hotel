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
                <h3 class="page-header">Thêm mới phòng nghỉ</h3>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{route('room.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên phòng </label>
                        <input class="form-control" name="name" placeholder="Nhập tên phòng" required>
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
                        <input type="number" class="form-control" name="price" placeholder="Nhập giá phòng " required>
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
                        <textarea class="form-control" name="detail" placeholder="Nhập chi tiết phòng nghỉ" required></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Thêm phòng nghỉ</button>
                        <a href="{{route('room')}}" class="btn btn-default">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.main-->
@endsection
