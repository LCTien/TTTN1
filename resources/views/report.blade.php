@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Báo cáo >   <span class="orange strong">  Lập báo cáo</span></div>
<div  class="container-control"><a href="{{ route('givenumber.add') }}" class="add-button">
    <i class="fa fa-download"></i>
    <p>Tải về</p>
</a>
</div>
<div class="container">
    <div class="dropdown-container-main">
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
        $(".dropdown-box-calendar").click(function(){
            $(".box-calendar").toggleClass("block");
        });
    });
    </script>
    <div class="table">
        <table>
            <thead>
               <tr>
                   <th class="bd-radius-topleft10">Số thứ tự</th>
                   <th>Tên dịch vụ</th>
                   <th>Thời gian cấp</th>
                   <th>Tình trạng</th>
                   <th class="bd-radius-topright10">Nguồn cấp</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                 <td>2010001</td>
                 <td>Khám tim mạch</td>
                 <td >17:25 - 29/4/2022</td>
                 <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                 <td>Kiosk</td>
               </tr>  
               <tr>
                <td>2010001</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
              </tr>  
              <tr>
                <td>2010001</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
              </tr>  
              <tr>
                <td>2010001</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
              </tr>  
              <tr>
                <td>2010001</td>
                <td>Khám tim mạch</td>
                <td >17:25 - 29/4/2022</td>
                <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                <td>Kiosk</td>
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
