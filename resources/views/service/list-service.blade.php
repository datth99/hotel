@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('list-service')}}">
                        <em class="fa fa-user"></em>
                    </a>
                </li>
                <li class="active">Dịch vụ</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Danh sách dịch vụ</h3>
            </div>
        </div>
        <!--/.row-->

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('add-service')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới hệ số</a>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã dịch vụ</th>
                        <th scope="col">Tên dịch vụ</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Chỉnh sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $s)
                        <tr>
                            <th scope="row">{{ $s->id }}</th>
                            <td>{{ $s->name }}</td>
                            <td>{{ number_format($s->price) }} Đồng</td>
                            <td>
                                <a href="service/{{ $s->id }}/edit" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
                                <a href="service/{{ $s->id }}/delete" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align='right'>
                    {{$service->links("pagination::bootstrap-4")}}
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
        </div>

    </div>
    <!--/.main-->
@endsection
