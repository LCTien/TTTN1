@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Cấp số >  Danh sách cấp số > <span class="orange strong"> Cấp số mới</span></div>
<p class="component-title strong">Quản lý cấp số</p>

<div class="container bg-white">
    <div class="givenumber-form">
        <h1>CẤP SỐ MỚI</h1>
        <p>Dịch vụ khách hàng lựa chọn</p>
        <div class="dropdown">
            <p>Tất cả</p>
            <i class="material-icons">arrow_drop_down</i>
            <div class="givenumber-dropbox">
                <ul id="drop">
                    <li  class="box-items box-active">Tất cả</li>
                    <li  class="box-items ">Đang hoạt động</li>
                    <li  class="box-items ">Ngưng hoạt động</li>

                </ul>
            </div>
           
        </div>
        <div class="give-add-button">
            <a href="" class="denie-button"> Hủy bỏ</a>
            <button type="submit" class="continue-button">Cấp số</button>
        </div>
        <script>
        
        $(document).ready(function(){
        let flag = 0;
        $(".dropdown").click(function(){
            $(".givenumber-dropbox").toggleClass("block");
            $('.dropdown i').text('arrow_drop_up');
            flag++;
           if(flag == 2)
           {
               flag = 0;
            $('.dropdown i').text('arrow_drop_down');
           }
        });
        $(".givenumber-dropbox li").click(function(){
            $(".givenumber-dropbox .box-active").removeClass("box-active");
            $(".givenumber-dropbox ul").removeClass("block");
            $(this).toggleClass("box-active");
            $(".dropdown p").text($(this).text());
            $('.dropdown i').text('arrow_drop_down');
            flag1 =0;
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
    </div>
</div>
@endsection
