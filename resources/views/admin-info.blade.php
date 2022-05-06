@extends('layout.layout')
@extends('layout.navbar')
@section('content')
<div class="admin-title"><p>Thông tin cá nhân</p></div>
    <div class="content">
        <div class="profile-1">
            <img src="/assets/img/lecongtien.jpg" alt="avatar" id="avatar">
            <a class="profile-1 set-avatar" onclick="openFile()"><i class="fas fa-camera"></i></a>
            <h1>Lê Công Tiến</h1>
        </div>
      
        <div class="profile-2">
            <div class=" profile-2-item">
                <h4>Tên người dùng:</h4>
                <p>Lê Công Tiến</p>
            </div>
            <div class=" profile-2-item">
                <h4>Tên đăng nhập:</h4>
                <p>lecongtien2k1</p>
            </div><div class=" profile-2-item">
                <h4>Số điện thoại:</h4>
                <p>3058549***</p>
            </div><div class=" profile-2-item">
                <h4>Mật khẩu:</h4>
                <p>lct21201</p>
            </div><div class=" profile-2-item">
                <h4>Email:</h4>
                <p>tienit21201@gmail.com</p>
            </div><div class=" profile-2-item">
                <h4>Vai trò:</h4>
                <p>Dev PHP</p>
            
        </div>
    </div>
    <script>
        async function openFile(){
           let [filehandel] = await window.showOpenFilePicker({
               types: [
                   {
                       description: 'Image',
                       accept:{
                           'images/*' : ['.jpg','.png','.jpeg','.gif']
                       }
                   },
               ],
               excludeAcceptAllOption: true,
               multiple: false
           });
           let fileData = await filehandel.getFile();
           console.log(fileData);
        }
    </script>
@endsection
