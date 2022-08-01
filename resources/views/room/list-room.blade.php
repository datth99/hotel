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
                <h3 class="page-header">Danh sách phòng nghỉ</h3>
            </div>
        </div>
        <!--/.row-->

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('add-room')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới phòng nghỉ</a>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã phòng</th>
                        <th scope="col">Tên phòng nghỉ</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Chi tiết</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Chỉnh sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($room as $r)
                        <tr>
                            <th scope="row">{{ $r->id }}</th>
                            <td>{{ $r->name }}</td>
                            <td>
                                {{ $r->level == 1 ? 'VIP I' : 'VIP II' }}
                            </td>
                            <td>{{ number_format($r->price) }} Đồng</td>
                            <td>{{ $r->detail }}</td>
                            <td>{{ $r->status == 1 ? 'Còn phòng' : 'Đã thuê' }}</td>
                            <td>
                                <a href="room/{{ $r->id }}/edit" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
                                <a href="room/{{ $r->id }}/delete" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align='right'>
                    {{$room->links("pagination::bootstrap-4")}}
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>

    </div>
    <!--/.main-->
@endsection
