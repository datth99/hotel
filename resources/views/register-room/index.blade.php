@extends("master.master")
@section("title", "Admin - HOTEL")
@section("main")
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('register-room')}}">
                        <em class="fa fa-user"></em>
                    </a>
                </li>
                <li class="active">Đăng ký phòng</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Đăng ký thuê phòng</h3>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{route('register-room.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Khách hàng</label>
                        <select class="form-control custom-select" name="customer_id" required>
                            @foreach ($customer as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn phòng</label>
                        <select class="form-control custom-select" name="room_id" required>
                            @foreach ($room as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số ngày thuê</label>
                        <input class="form-control" type="number" name="day" placeholder="Nhập số ngày thuê" required>
                    </div>
                    <div class="form-group">
                        <label>Chọn dịch vụ</label> <br>
                        <select class="form-control custom-select" name="service_id" required>
                            @foreach ($service as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Thuê phòng</button>
                        <a href="{{route('register-room')}}" class="btn btn-default">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.main-->
@endsection
