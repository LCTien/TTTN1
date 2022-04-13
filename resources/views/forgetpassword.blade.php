@extends('layout.layout')
@section('content')
   
       <img src="assets/img/LogoAltaMedia.png" alt="logo" class="logo">
           <p class="forget-password">Đặt lại mật khẩu</p>
           <p class="forget-password-2">Vui lòng nhập email để đặt lại mật khẩu của bạn *</p>
           <input type="text" class="input-email">
           <a href="{{ route('login') }}" class="denie-button">Hủy</button>
           <a href="{{ route('forgetpassword.confirm') }}" class="continue-button">Tiếp tục</a>
    </div>
    <div class="title">
        <img src="assets/img/background2.png" alt="background" class="background2">
   
@endsection
