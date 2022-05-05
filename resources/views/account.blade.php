@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Cài đặt hệ thống > <span class="orange strong">  Quản lý tài khoản</span></div>
<p class="component-title strong">Danh sách tài khoản</p>
<div  class="container-control"><a href="{{ route('account.add') }}" class="add-button">
    <i class="material-icons">add_box</i>
    <p>Thêm tài khoản</p>
</a>
</div>
<div class="container">
    <div class="dropdown-container-main">
        <div class="dropdown-container">
            <p>Tên vai trò</p>
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
    </div>
   <script>
   $(document).ready(function(){
    let flag =0;
    $("#dropAction").click(function(){
        $("#dropAction-box").toggleClass("block");
        $('#dropAction i').text('arrow_drop_up');
        flag++;
        if(flag == 2)
        {
            flag = 0;
            $('#dropAction i').text('arrow_drop_down');
        }
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
                   <th class="bd-radius-topleft10">Tên đăng nhập</th>
                   <th>Họ tên</th>
                   <th>Số điện thoại</th>
                   <th>Email</th>
                   <th>Vai trò</th>
                   <th>Trạng thái hoạt động</th>
                   <th class="bd-radius-topright10">&emsp;</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                 <td>congtien@abc</td>
                 <td>Nguyễn văn A</td>
                 <td>0123456789</td>
                 <td>tien2k1@gmail.com</td>
                 <td>Kế toán</td>
                 <td ><i class="dot dot-fire"></i><p>Ngưng hoạt động</p></td>
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
