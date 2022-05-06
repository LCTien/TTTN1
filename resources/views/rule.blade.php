@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="main-title">Cài đặt hệ thống >   <span class="orange strong">  Danh sách vai trò</span></div>
<p class="component-title strong">Quản lý vai trò</p>
<div  class="container-control"><a href="{{ route('rule.add') }}" class="add-button">
    <i class="material-icons">add_box</i>
    <p>Thêm vai trò</p>
</a>
</div>

<div class="container">
    <div class="dropdown-container-main">
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
                   <th class="bd-radius-topleft10">Tên vai trò</th>
                   <th>Số người dùng</th>
                   <th>Mô tả</th>
                   <th class="bd-radius-topright10">&emsp;</th>
               </tr>
            </thead>
            <tbody>
              @foreach ($listRoles as $items)
               <tr>
                 <td>{{ $items->name }}</td>
                 <td>5</td>
                 <td>{{ $items->description }}</td>
                 <td><a href="{{ route('givenumber.update',['id' => $items->id]) }}">Cập nhật</a></td>
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
