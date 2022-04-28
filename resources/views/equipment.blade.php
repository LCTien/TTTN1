@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Thiết bị >   <span class="orange strong">  Danh sách thiết bị</span></div>
<p class="component-title strong">Danh sách thiết bị</p>
<div  class="container-control"><a href="{{ route('equipment.add') }}" class="add-button">
    <i class="material-icons">add_box</i>
    <p>Thêm thiết bị</p>
</a>
</div>

<div class="container">
    <div class="dropdown-container-main">
        <div class="dropdown-container">
            <p>Trạng thái hoạt động</p>
            <div class="dropdown-box" id="dropAction">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
            <div class="box" id="dropAction-box">
                <ul>
                    <li  class="box-items box-active">Tất cả</li>
                    <li  class="box-items ">Đang hoạt động</li>
                    <li  class="box-items ">Ngưng hoạt động</li>

                </ul>
            </div>
        </div>
        <div class="dropdown-container margin-left15" >
            <p>Trạng thái kết nối</p>
            <div class="dropdown-box" id="dropConnect">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
            <div class="box" id="dropConnect-box">
                <ul>
                    <li class="box-items box-active">Tất cả</li>
                    <li class="box-items ">Kết nối</li>
                    <li class="box-items ">Mất kết nối</li>
                </ul> 
            </div>
        </div>
      
    </div>
    <script> 
    $(document).ready(function(){
        $("#dropAction").click(function(){
            $("#dropAction-box").toggleClass("block");
        });
        $("#dropAction-box li").click(function(){
            $("#dropAction-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropAction-box").removeClass("block");
            $("#dropAction p").text($(this).text());
        });
        $("#dropConnect").click(function(){
            $("#dropConnect-box").toggleClass("block");
        });
        $("#dropConnect-box li").click(function(){
            $("#dropConnect-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropConnect-box").removeClass("block");
            $("#dropConnect p").text($(this).text());
        });
    });
    </script>
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
                 <td id="see-more"><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p>
                    <div class="see-more"><p>khám tim mạch, khám mắt, khám mũi, khám miệng</p></div>
                </td>
                 <td><a href="{{ route('equipment.detail',['id' => 1]) }}">Chi tiết</a></td>
                 <td><a href="{{ route('equipment.update',['id' => 1]) }}">Cập nhật</a></td>
               </tr>
               <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td id="see-more"><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p>
                   <div class="see-more"><p>khám tim mạch, khám mắt, khám mũi, khám miệng</p></div>
               </td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td id="see-more"><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p>
                   <div class="see-more"><p>khám tim mạch, khám mắt, khám mũi, khám miệng</p></div>
               </td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td id="see-more"><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p>
                   <div class="see-more"><p>khám tim mạch, khám mắt, khám mũi, khám miệng</p></div>
               </td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
              <tr>
                <td>KIO_01</td>
                <td>Kiosk</td>
                <td>127.0.0.0</td>
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                <td><i class="dot dot-fire"></i><p>Mất kết nối</p></td>
                <td id="see-more"><p class="overflow">khám tim mạch, khám mắt,khám mũi, khám miệng</p>
                   <div class="see-more"><p>khám tim mạch, khám mắt, khám mũi, khám miệng</p></div>
               </td>
                <td><a href="#">Chi tiết</a></td>
                <td><a href="#">Cập nhật</a></td>
              </tr>
            </tbody>
        </table>
    </div>
    <div class="page-control">
        <a href=""><i class="material-icons">keyboard_arrow_left</i></a>
        <a href="" class="page page-active">1</a>
        <a href="" class="page">2</a>
        <a href="" class="page">3</a> ...
        <a href="" class="page">10</a>
        <a href=""><i class="material-icons">keyboard_arrow_right</i></a>
    </div>
</div>
</div>
@endsection
