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
          <h3 class="page-header">Danh sách khách hàng</h3>
        </div>
    </div>
    <!--/.row-->

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
          <a href="{{route('add-customer')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới khách hàng</a>
          <hr>
        <table class="table table-hover table-bordered">
        <thead class="thead-light">
        <tr>
          <th scope="col">Mã khách hàng</th>
          <th scope="col">Tên khách hàng</th>
          <th scope="col">Số CMND / CCCD</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Chỉnh sửa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customer as $c)
          <tr>
            <th scope="row">{{ $c->id }}</th>
            <td>{{ $c->name }}</td>
            <td>{{ $c->passport }}</td>
            <td>{{ $c->phone }}</td>
            <td>{{ $c->address }}</td>
            <td>
              <a href="customer/{{ $c->id }}/edit" type="button" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
              <a href="customer/{{ $c->id }}/delete" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</a>
              <a href="customer/{{ $c->id }}/history" class="btn btn-sm btn-success"><em class="fa fa-list">&nbsp;</em>Lịch sử thuê</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
            <div align='right'>
                {{$customer->links("pagination::bootstrap-4")}}
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
    </div>

</div>
<!--/.main-->
@endsection
