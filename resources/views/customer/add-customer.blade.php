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
            <h3 class="page-header">Thêm mới khách hàng</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <form role="form" method="POST" action="{{route('store-customer')}}">
              @csrf
            <div class="form-group">
              <label>Họ và tên</label>
              <input class="form-control" name="name" placeholder="Nhập họ và tên" required >
                @error('name')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
              <div class="form-group">
                  <label>Số CCCD / CMND</label>
                  <input class="form-control" name="passport" placeholder="Nhập số CCCD / CMND" required >
                  @error('passport')
                  <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>
            <div class="form-group">
              <label>Số điện thoại</label>
              <input type="text" name="phone" class="form-control" placeholder="Nhập số CCCD / CMND" required>
            </div>
  
            <div class="form-group">
              <label>Địa chỉ</label>
              <input class="form-control" name="address" placeholder="Nhập địa chỉ" required >
            </div>

            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Thêm khách hàng</button>
              <a href="{{route('customer')}}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
        </div>
    </div>

</div>
<!--/.main-->
@endsection
