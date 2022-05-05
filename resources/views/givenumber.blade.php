@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Cấp số >   <span class="orange strong">  Danh sách cấp số</span></div>
<p class="component-title strong">Quản lý cấp số</p>
<div  class="container-control"><a href="{{ route('givenumber.add') }}" class="add-button">
    <i class="material-icons">add_box</i>
    <p>Cấp số mới</p>
</a>
</div>

<div class="container">
    <div class="dropdown-container-main">
        <div class="dropdown-container">
            <p>Tên dịch vụ</p>
            <div class="dropdown-box" id="dropServiceName">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
            <div class="box" id="dropServiceName-box">
                <ul>
                    <li  class="box-items box-active">Tất cả</li>
                    <li  class="box-items ">Đang hoạt động</li>
                    <li  class="box-items ">Ngưng hoạt động</li>
                </ul>
            </div>
        </div>
        <div class="dropdown-container margin-left10">
            <p>Tình trạng</p>
            <div class="dropdown-box" id="dropStatus">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
            <div class="box" id="dropStatus-box">
                <ul>
                    <li  class="box-items box-active">Tất cả</li>
                    <li  class="box-items ">Đang hoạt động</li>
                    <li  class="box-items ">Ngưng hoạt động</li>

                </ul>
            </div>
        </div>
        <div class="dropdown-container margin-left10">
            <p>Nguồn cấp</p>
            <div class="dropdown-box" id="dropSource">
                <p>Tất cả</p>
                <i class="material-icons">arrow_drop_down</i>
            </div>
            <div class="box" id="dropSource-box">
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
        let flag2 = 0;
        let flag3 = 0;
        $("#dropServiceName").click(function(){
            $("#dropServiceName-box").toggleClass("block");
            $('#dropServiceName i').text('arrow_drop_up');
            flag1++;
            if(flag1 == 2)
            {
                flag1 = 0;
                $('#dropServiceName i').text('arrow_drop_down');
            }
            
        });
        $("#dropServiceName-box li").click(function(){
            $("#dropServiceName-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropServiceName-box").removeClass("block");
            $('#dropServiceName i').text('arrow_drop_down');
            $("#dropServiceName p").text($(this).text());
            flag1 = 0;
        });
        $("#dropStatus").click(function(){
            $("#dropStatus-box").toggleClass("block");
            $('#dropStatus i').text('arrow_drop_up');
            flag2++;
            if(flag2 == 2)
            {
                flag2 = 0;
                $('#dropStatus i').text('arrow_drop_down');
            }
        });
        $("#dropStatus-box li").click(function(){
            $("#dropStatus-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropStatus-box").removeClass("block");
            $('#dropStatus i').text('arrow_drop_down');
            $("#dropStatus p").text($(this).text());
            flag2 = 0;
        });
        $("#dropSource").click(function(){
            $('#dropSource i').text('arrow_drop_up');
            $("#dropSource-box").toggleClass("block");
            flag3++;
            if(flag3 == 2)
            {
                flag3 = 0;
                $('#dropSource i').text('arrow_drop_down');
            }
        });
        $("#dropSource-box li").click(function(){
            $("#dropSource-box .box-active").removeClass("box-active");
            $(this).toggleClass("box-active");
            $("#dropSource-box").removeClass("block");
            $('#dropSource i').text('arrow_drop_down');
            $("#dropSource p").text($(this).text());
            flag3 = 0;
        });
        $(".dropdown-box-calendar").click(function(){
            $(".box-calendar").toggleClass("block");
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
                   <th>Tên khách hàng</th>
                   <th>Tên dịch vụ</th>
                   <th>Thời gian cấp</th>
                   <th>Hạn sử dụng</th>
                   <th>Trạng thái</th>
                   <th>Nguồn cấp</th>
                   <th class="bd-radius-topright10">&emsp;</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                 <td>2010001</td>
                 <td>Lê Công Tiến</td>
                 <td>Khám tim mạch</td>
                 <td >17:25 - 29/4/2022</td>
                 <td>14:25 - 29/4/2022</td>
                 <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                 <td>Kiosk</td>
                 <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Chi tiết</a></td>
               </tr>
               <tr>
                <td>2010001</td>
                <td>Lê Công Tiến</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td>14:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
                <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Cập nhật</a></td>
              </tr>
              <tr>
                <td>2010001</td>
                <td>Lê Công Tiến</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td>14:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
                <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Cập nhật</a></td>
              </tr>
              <tr>
                <td>2010001</td>
                <td>Lê Công Tiến</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td>14:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
                <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Cập nhật</a></td>
              </tr>
              <tr>
                <td>2010001</td>
                <td>Lê Công Tiến</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td>14:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
                <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Cập nhật</a></td>
              </tr>
              <tr>
                <td>2010001</td>
                <td>Lê Công Tiến</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td>14:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
                <td><a href="{{ route('givenumber.update',['id' => 1]) }}">Cập nhật</a></td>
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
