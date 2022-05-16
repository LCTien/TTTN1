@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Báo cáo >   <span class="orange strong">  Lập báo cáo</span></div>
<div  class="container-control"><a href="{{ route('download') }}" class="add-button">
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
                <p id="time1">26/04/2022</p>
            </div>
            <div class="box-calendar">
                <div class="bg-white w-100" id="caleandar" style="width:300px;height:260px"></div>
            </div>
            <div class="dropdown-box-calendar-and">
            <i class="material-icons">play_arrow</i>
            </div>
            <div class="dropdown-box-calendar">
                <i class="far fa-calendar-alt"></i>
                <p id="time2">dd/mm/yy</p>
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
                @foreach ($stt as $item)
                <tr>
                    <td>{{ $item->serial }}</td>
                    <td>{{ $item->service_name }}</td>
                    <td >{{ $item->created_at }}</td>
                    @if($item->status == -1)
                    <td ><i class="dot dot-fire"></i><p>Đã bỏ qua</p></td>
                    @elseif ($item->status == 0)
                    <td ><i class="dot dot-water"></i><p>Đang chờ</p></td>
                    @elseif ($item->status == 1)
                    <td ><i class="dot dot-jungle"></i><p>Đã sử dụng</p></td>
                    @endif
                    <td>{{ $item->equipment_name }}</td>
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
