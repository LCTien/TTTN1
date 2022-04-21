@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Thiết bị >   <span class="orange strong">  Danh sách thiết bị</span></div>
<p class="component-title strong">Danh sách thiết bị</p>
<a href="#" class="container-control"><div class="add-button">
    <i class="material-icons">add_box</i>
    <p>Thêm thiết bị</p>
</div></a>

<div class="container">
    <div class="dropdown-container-main">
        <div class="dropdown-container">
            <p>Trạng thái hoạt động</p>
            <a class="dropdown-box" id="dropAction">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </a>
            <div class="box"></div>
        </div>
        <div class="dropdown-container margin-left15">
            <p>Trạng thái kết nối</p>
            <div class="dropdown-box" id="dropConnect">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
        </div>
    </div>
    <div class="dropdown-container-search">
        <div class="dropdown-container">
            <p>Từ khóa</p>
            <div class="dropdown-box">
                <input type="text" placeholder="Nhập từ khóa" name="search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
               <tr>
                   <th class="bd-radius-topleft10">Mã thiết bị</th>
                   <th>Tên thiết bị</th>
                   <th>Địa chỉ IP</th>
                   <th>Trạng thái hoạt động</th>
                   <th>Trạng thái kết nối</th>
                   <th>Dịch vụ sử dụng</th>
                   <th>&emsp;</th>
                   <th class="bd-radius-topright10">&emsp;</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                 <td>KIO_01</td>
                 <td>Kiosk</td>
                 <td>127.0.0.0</td>
                 <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                 <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                 <td><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p> <a href="#" class=" padding-left10">Xem thêm</a></td>
                 <td><a href="#">Chi tiết</a></td>
                 <td><a href="#">Cập nhật</a></td>
               </tr>
               <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p> <a href="#" class=" padding-left10">Xem thêm</a></td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p> <a href="#" class=" padding-left10">Xem thêm</a></td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p> <a href="#" class=" padding-left10">Xem thêm</a></td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p> <a href="#" class=" padding-left10">Xem thêm</a></td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
