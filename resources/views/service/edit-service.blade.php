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
                <h3 class="page-header">Chỉnh sửa thông tin dịch vụ</h3>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="service/{{ $service->id }}/update">
                    @csrf
                    <div class="form-group">
                        <label>Nhập tên dịch vụ</label>
                        <input class="form-control" name="name" placeholder="Nhập tên dịch vụ" value="{{ $service->name }}" required>
                        @error('name')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nhập giá</label>
                        <input class="form-control" type="number" name="price" placeholder="Nhập giá" value="{{ $service->price }}" required>
                        @error('price')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{route('list-service')}}" class="btn btn-default">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.main-->
@endsection
