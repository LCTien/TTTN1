@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Dịch vụ >   <span class="orange strong">  Danh sách dịch vụ</span></div>
<p class="component-title strong">Quản lý dịch vụ</p>
<div  class="container-control"><a href="{{ route('service.add') }}" class="add-button">
    <i class="material-icons">add_box</i>
    <p>Thêm dịch vụ</p>
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
        
        <div class="dropdown-container margin-left15" style="width: 500px">
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
        let flag1 = 0;
        $("#dropAction").click(function(){
            $("#dropAction-box").toggleClass("block");
            $('#dropAction i').text('arrow_drop_up');
            flag1++;
            if(flag1 == 2)
            {
                flag1 = 0;
                $('#dropAction i').text('arrow_drop_down');
            }
        });
        $("#dropAction-box li").click(function(){
            $("#dropAction-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropAction-box").removeClass("block");
            $("#dropAction p").text($(this).text());
            $('#dropAction i').text('arrow_drop_down');
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
                   <th class="bd-radius-topleft10">Mã dịch vụ</th>
                   <th>Tên dịch vụ</th>
                   <th>Mô tả</th>
                   <th>Trạng thái hoạt động</th>
                   <th>&emsp;</th>
                   <th class="bd-radius-topright10">&emsp;</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($listService as $item)
               <tr>
                <td>{{ $item->Code }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                @if ($item->status_active == -1)
                <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
                @else
                <td ><i class="dot dot-jungle"></i><p>Hoạt động</p></td>
                @endif
                <td><a href="{{ route('service.detail',['id' =>$item->Code]) }}">Chi tiết</a></td>
                <td><a href="{{ route('service.update',['id' => $item->Code]) }}">Cập nhật</a></td>
               </tr>
               @endforeach
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
