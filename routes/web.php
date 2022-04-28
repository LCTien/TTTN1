<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function() {
    return view('login');
})->name('login');
Route::post('/login',function(Request $request) {
    return view('login',['OK'=>"true"]);
})->name('confirm.forgetpassword');
Route::get('/forgetpassword',function() {
    return view('forgetpassword');
})->name('forgetpassword');
Route::get('/forgetpassword-confirm',function() {
    return view('forgetpassword-confirm');
})->name('forgetpassword.confirm');
Route::post('welcome',function(Request $request){
    if($request->post('account') != "admin" && $request->post('password') !="123456")
    {
         return redirect()->route('login',['error' => "Sai tài khoản hoặc mật khẩu"]);
    }
    return view('admin-info');
})->name('welcome');
Route::get('/admin-info', function () {
    return view('admin-info');
})->name('admin.info');
Route::get('/dashboard', function () {
    return view('dashboard',['isDashboard' => true]);
})->name('dashboard');
Route::get('/equipment', function () {
    return view('equipment',['isEquipment' => true]);
})->name('equipment');
Route::get('/equipment/add', function () {
    return view('add-equipment',['isEquipment' => true]);
})->name('equipment.add');
Route::get('/equipment/update/{id}', function () {
    return view('update-equipment',['isEquipment' => true]);
})->name('equipment.update');
Route::get('/equipment/detail/{id}', function () {
    return view('detail-equipment',['isEquipment' => true]);
})->name('equipment.detail');
Route::post('add',function (Request $request) {
    dd($request);
    return redirect()->route('equipment');
})->name('add.equipment');
Route::get('/service', function () {
    return view('service',['isService' => true]);
})->name('service');
Route::get('/service/add', function () {
    return view('add-service',['isService' => true]);
})->name('service.add');
Route::get('/service/detail', function () {
    return view('detail-service',['isService' => true]);
})->name('service.detail');