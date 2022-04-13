@extends('layout.layout')
@section('content')
    <nav>
        <img src="/assets/img/LogoAltaMedia.png" alt="logo" class="logo">
        <a href="#" class="nav-item"> <i class="fab fa-codepen"></i> <p>Dashboard</p></a>
        <a href="#" class="nav-item"> <i class="fas fa-desktop"></i> <p>Thiết bị</p></a>
        <a href="#" class="nav-item"> <i class="far fa-comment-dots"></i> <p>Dịch vụ</p></a>   
        <a href="#" class="nav-item"> <i class="fas fa-database"></i> <p>Cấp số</p></a>
        <a href="#" class="nav-item"> <i class="fas fa-chart-line"></i> <p>Báo cáo</p></a>
        <a href="#" class="nav-item"> <i class="material-icons">settings</i> <p>Cài đặt hệ thống</p></a>
        <a href="#" class="logout"> <i class="fas fa-sign-out-alt"></i> Đăng Xuất</a>
    </nav>

    <div class="title"><p>Thông tin cá nhân</p></div>
    <a  class="anoun-bell" href="#"><i class="fas fa-bell"></i></a>
    <img class ="img-profile" src="/assets/img/lecongtien.jpg" alt="">
    <div class="title-2">
        <p>Xin Chào</p>
        <h4>Lê Công Tiến</h4>
    </div>
    <div class="content">
        <div class="profile-1">
            <img src="/assets/img/lecongtien.jpg" alt="avatar">
            <a class="profile-1 set-avatar"href=""><i class="fas fa-camera"></i></a>
            <h1>Lê Công Tiến</h1>
        </div>
      
        <div class="profile-2">
            <div class=" profile-2-item">
                <h4>Tên người dùng</h4>
                <p>Lê Công Tiến</p>
            </div>
            <div class=" profile-2-item">
                <h4>Tên đăng nhập</h4>
                <p>lecongtien2k1</p>
            </div><div class=" profile-2-item">
                <h4>Số điện thoại</h4>
                <p>3058549***</p>
            </div><div class=" profile-2-item">
                <h4>Mật khẩu</h4>
                <p>lct21201</p>
            </div><div class=" profile-2-item">
                <h4>Email</h4>
                <p>tienit21201@gmail.com</p>
            </div><div class=" profile-2-item">
                <h4>Vai trò:</h4>
                <p>Dev PHP</p>
            
        </div>
    </div>
@endsection
