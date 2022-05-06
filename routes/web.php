<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\RoleController;
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

Route::post('/forgetpassword-confirm',function() {
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

Route::get('/equipment', [EquipmentController::class,'index'])->name('equipment');

Route::get('/equipment/search', [EquipmentController::class,'search']);

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
Route::get('/service/update', function () {
    return view('update-service',['isService' => true]);
})->name('service.update');
Route::post('/update-service', function (Request $request) {
})->name('update.service');
Route::get('/givenumber',function(){
    return view('givenumber',['isGivenumber'=> true]);
})->name('givenumber');
Route::get('/givenumber/add',function(){
    return view('add-givenumber',['isGivenumber'=> true]);
})->name('givenumber.add');
Route::get('/givenumber/update',function(){
    return view('givenumber',['isGivenumber'=> true]);
})->name('givenumber.update');
Route::get('/report',function(){
    return view('report',['isReport'=> true]);
})->name('report');

Route::get('/manage/rule',[RoleController::class,'index'])->name('rule.management');

Route::get('/manage/rule/add',function(){
    return view('add-rule',['isInstall'=> true,'isRule' => true]);
})->name('rule.add');

//account
Route::get('/manage/account',function(){
    return view('account',['isInstall'=> true,'isAccount' => true]);
})->name('account');
Route::get('/manage/account/add',function(){
    return view('add-account',['isInstall'=> true,'isAccount' => true]);
})->name('account.add');
Route::get('/manage/account/update/{id}',function(){
    return view('update-account',['isInstall'=> true,'isAccount' => true]);
})->name('account.update');

//diary
Route::get('/manage/diary',function(){
    return view('diary-user',['isInstall'=> true,'isDiary' => true]);
})->name('diary');
