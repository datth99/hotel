@extends("master.master")
@section("title", "Admin - HOTEL")
@section("main")
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('order')}}">
                        <em class="fa fa-user"></em>
                    </a>
                </li>
                <li class="active">Danh sách đơn hàng</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Danh sách đơn hàng</h3>
            </div>
        </div>
        <!--/.row-->

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('register-room')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Đăng ký phòng</a>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Phòng </th>
                        <th scope="col">Số ngày thuê </th>
                        <th scope="col">Dịch vụ thuê </th>
                        <th scope="col">Tổng tiền thanh toán</th>
                        <th scope="col">Trạng thái </th>
                        <th scope="col">Thanh toán </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $o)
                        <tr>
                            <th scope="row">{{ $o->id }}</th>
                            <td>{{ $o->customer->name }}</td>
                            <td>{{ $o->room->name }}</td>
                            <td>{{ $o->day }}</td>
                            <td>{{ $o->service->name }}</td>
                            <td>{{ number_format(($o->room->price * $o->day) + $o->service->price) }}</td>
                            <td>{{ $o->status == 1 ? 'Chưa thanh toán' : 'Đã thanh toán' }}</td>
                            <td>
                                @if($o->status == 1)
                                    <a href="order/{{ $o->id }}/payment" type="button" class="btn btn-sm btn-primary"><em class="fa fa-check">&nbsp;</em> Thanh toán</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align='right'>
                    {{$order->links("pagination::bootstrap-4")}}
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>

    </div>
    <!--/.main-->
@endsection
