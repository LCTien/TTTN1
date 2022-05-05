@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Dịch vụ > Danh sách dịch vụ  ><span class="orange strong"> Cập nhật dịch vụ </span></div>
<p class="component-title strong">Quản lý dịch vụ</p>
<div class="container">
  <div class="container-component-1"> 
    <div class="form-title">Thông tin thiết bị</div>
    <div class="container-component-1-content"><span>Mã dịch vụ:</span><p>201</p></div>
    <div class="container-component-1-content"><span>Tên dịch vụ:</span><p>Khám tim mạch</p></div>
    <div class="container-component-1-content"><span>Mô tả:</span><p>Chuyên về các bệnh tim </p></div>
    <div class="form-title">Quy tắc cấp số</div>
    <div class="container-component-1-content"><span>Tăng tự động: </span><p>từ 1 đến 9999</p></div>
    <div class="container-component-1-content"><span>Prefix: </span><p>0001</p></div>
    <div class="container-component-1-content"><span>Reset hằng ngày</span></div>
  </div>
  <div class="container-component-2">
    <div class="dropdown-container-main">
    <div class="dropdown-container">
        <p>Trạng thái</p>
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
    <div class="dropdown-container margin-left15">
        <p>Chọn thời gian</p>
        <div class="dropdown-box-calendar">
            <i class="far fa-calendar-alt"></i>
            <p>26/04/2022</p>
        </div>
        <div class="box-calendar">
            <div class="bg-white w-100" id="caleandar" style="width:300px;height:260px"></div>
        </div>
        <div class="dropdown-box-calendar-and">
        <i class="material-icons">play_arrow</i>
        </div>
        <div class="dropdown-box-calendar">
            <i class="far fa-calendar-alt"></i>
            <p>26/04/2022</p>
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
    $(".dropdown-box-calendar").click(function(){
        $(".box-calendar").toggleClass("block");
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
               <th class="bd-radius-topleft10">STT</th>
               
               <th class="bd-radius-topright10">Trạng thái</th>
           </tr>
        </thead>
        <tbody>
           <tr>
             <td>201</td>
             <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
           </tr>
           <tr>
            <td>201</td>
            <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
          </tr>
          <tr>
            <td>201</td>
            <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
          </tr>
          <tr>
            <td>201</td>
            <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
          </tr>
          <tr>
            <td>201</td>
            <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
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
</div></div>
</div>
@endsection
