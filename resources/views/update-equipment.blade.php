@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Thiết bị > Danh sách thiết bị ><span class="orange strong">Cập nhật thiết bị</span></div>
<p class="component-title strong">Quản lý thiết bị</p>
<div class="container bg-white h-400">
<div class="form-title">Thông tin thiết bị</div>
    <form action="#" class="form-group">
        <div class="form-control2">
            <label for="code">Mã thiết bị: <span class="fire">*</span></label>
            <input type="text" name="code" placeholder="Nhập mã thiết bị">
        </div>
        <div class="form-control2 margin-left20">
            <label for="code">Loại thiết bị: <span class="fire">*</span></label>
            <select name="type">
                <option value="1">Chọn loại thiết bị</option>
                <option value="2">Kiosk</option>
                <option value="3">Display counter</option>
            </select>
        </div> 
        <div class="form-control2 ">
            <label for="code">Tên thiết bị: <span class="fire">*</span></label>
            <input type="text" name="code" placeholder="Nhập tên thiết bị">
        </div> 
        <div class="form-control2 margin-left20">
            <label for="code">Tên đăng nhập: <span class="fire">*</span></label>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập">
        </div> 
        <div class="form-control2 ">
            <label for="code">Địa chỉ IP: <span class="fire">*</span></label>
            <input type="text" name="ip_address" placeholder="Nhập địa chỉ IP">
        </div>
        <div class="form-control2 margin-left20">
            <label for="code">Mật khẩu: <span class="fire">*</span></label>
            <input type="text" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div class="form-control2 w-100">
            <label for="code">Dịch vụ sử dụng: <span class="fire">*</span></label>
            <input type="text" name="service_used" placeholder="Nhập dịch vụ sử dụng">
        </div>
        <div class="form-control2">
            <p><span class="fire relative">*</span>là trường thông tin bắt buộc</p>
        </div>
        <div class="form-buttons">
            <button type="submit" class="denie-button">Hủy bỏ</button>
            <button type="submit" class="continue-button">Cập nhật</button>
        </div>
    </form>
</div>
