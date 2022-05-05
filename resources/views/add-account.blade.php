@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Cài đặt hệ thống > Danh sách tài khoản ><span class="orange strong">Thêm tài khoản</span></div>
<p class="component-title strong">Quản lý tài khoản</p>
<div class="container bg-white h-400">
<div class="form-title">Thông tin tài khoản</div>
<form action="{{ route('add.equipment') }}" class="form-group" method="POST">
    @csrf
    <div class="form-control2">
        <label for="code">Họ tên: <span class="fire">*</span></label>
        <input type="text" name="fullname" placeholder="Nhập họ tên">
    </div>
    <div class="form-control2 margin-left20">
        <label for="username">Tên đăng nhập: <span class="fire">*</span></label>
        <input type="text" name="username" placeholder="Nhập tên đăng nhập">
    </div> 
    <div class="form-control2 ">
        <label for="name">Số điện thoại: <span class="fire">*</span></label>
        <input type="text" name="phonenumber" placeholder="Nhập số điện thoại">
    </div> 
    <div class="form-control2 margin-left20">
        <label for="password">Mật khẩu: <span class="fire">*</span></label>
        <input type="password" name="password" placeholder="Nhập mật khẩu">
    </div>
    <div class="form-control2 ">
        <label for="ip_address">Email: <span class="fire">*</span></label>
        <input type="email" name="email" placeholder="Nhập địa chỉ email">
    </div>
    <div class="form-control2  margin-left20">
        <label for="ip_address">Nhập lại mật khẩu: <span class="fire">*</span></label>
        <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu">
    </div>
    <div class="form-control2">
        <label for="code">Vai trò: <span class="fire">*</span></label>
        <select name="rule">
            <option value="1">Kiosk</option>
            <option value="2">Display counter</option>
        </select>
    </div> 
    <div class="form-control2  margin-left20">
        <label for="code">Tình trạng: <span class="fire">*</span></label>
        <select name="status">
            <option value="1">Hoạt động</option>
            <option value="2">Ngưng hoạt động</option>
        </select>
    </div> 
        <div class="form-buttons">
            <a class="denie-button" href="{{ route('equipment') }}">Hủy bỏ</a>
            <button type="submit" class="continue-button">Thêm thiết bị</button>
        </div>
        <div class="form-control2">
            <p><span class="fire relative">*</span>là trường thông tin bắt buộc</p>
        </div>
    </form>
</div>
