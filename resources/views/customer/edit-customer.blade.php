@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
              <a href="{{route('customer')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Khách hàng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Chỉnh sửa thông tin khách hàng</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <form role="form" method="POST" action="customer/{{ $customer->id }}/update">
              @csrf
            <div class="form-group">
              <label>Họ và tên</label>
              <input name="name" class="form-control" placeholder="Nhập họ và tên" value="{{ $customer->name }}" required>
            </div>
            <div class="form-group">
                <label>Số CMND / CCCD</label>
                <input name="passport" class="form-control" placeholder="Nhập số CMND / CCCD" value="{{ $customer->passport }}" required>
            </div>
            <div class="form-group">
              <label>Số điện thoại</label>
              <input type="text" name="phone" class="form-control" placeholder="Nhập số CCCD / CMND" value="{{ $customer->passport }}" required>
            </div>
            <div class="form-group">
              <label>Địa chỉ</label>
              <input class="form-control" name="address" placeholder="Nhập địa chỉ" value="{{ $customer->address }}" required >
            </div>
            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('customer')}}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
        </div>
    </div>

</div>
<!--/.main-->
@endsection
