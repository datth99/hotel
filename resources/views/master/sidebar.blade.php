<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="https://img.playerswiki.com/uploads/biography/2019/07/02/faker.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><h5>{{Auth::user()->name}}</h5></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="{{route('home')}}"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
            <li><a href="{{route('customer')}}"><em class="fa fa-user">&nbsp;</em> Nhân viên</a></li>
            <li><a href="{{route('room')}}"><em class="fa fa-home">&nbsp;</em> Phòng nghỉ</a></li>
            <li><a href="{{route('list-service')}}"><em class="fa fa-heart">&nbsp;</em> Dịch vụ</a></li>
            <li><a href=""><em class="fa fa-sign-in">&nbsp;</em> Thuê phòng </a></li>
            <li><a href=""><em class="fa fa-dollar">&nbsp;</em> Thanh toán</a></li>
            <hr>
            <li><a href="{{route('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
        </ul>
    </div>
