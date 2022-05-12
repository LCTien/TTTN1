<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GivenumberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
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

Route::get('/logout',[AccountController::class,'logout'])->name('logout');

Route::post('/login',[AccountController::class,'changePassword'])->name('confirm.forgetpassword');

Route::get('/forgetpassword',function() {
    return view('forgetpassword');
})->name('forgetpassword');

Route::post('/forgetpassword-confirm',[AccountController::class,'forgetpassword'])->name('forgetpassword.confirm');

Route::post('welcome',[AccountController::class,'login'])->name('welcome');

Route::get('/admin-info/{id}', [AccountController::class,'index'])->name('admin.info');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/equipment', [EquipmentController::class,'index'])->name('equipment');

Route::get('/equipment/search', [EquipmentController::class,'search']);

Route::get('/listService',[ServiceController::class,'listService']);
Route::get('/equipment/add', function () {
    return view('add-equipment',['isEquipment' => true]);
})->name('equipment.add');

Route::get('/equipment/update/{id}', [ EquipmentController::class,'updating'])->name('equipment.update');

Route::get('/equipment/detail/{id}',[ EquipmentController::class,'show'])->name('equipment.detail');

Route::post('add',[ EquipmentController::class,'create'])->name('add.equipment');

Route::post('update',[ EquipmentController::class,'edit'])->name('update.equipment');

Route::get('/service', [ServiceController::class,'index'])->name('service');

Route::get('/service/add', function () {
    return view('add-service',['isService' => true]);
})->name('service.add');

Route::get('/service/detail/{id}',[ServiceController::class,'show'])->name('service.detail');

Route::post('/addService',[ServiceController::class,'create'])->name('add.service');

Route::get('/service/update', [ServiceController::class,'updating'])->name('service.update');

Route::post('/updateService', [ServiceController::class,'update'])->name('update.service');

Route::get('/givenumber',[GivenumberController::class,'index'])->name('givenumber');

Route::get('/givenumber/add',[GivenumberController::class,'creating'])->name('givenumber.add');

Route::get('/givenumber/detail/{stt}',[GivenumberController::class,'detail'])->name('givenumber.detail');

Route::get('/givenumber/update',function(){
    return view('givenumber',['isGivenumber'=> true]);
})->name('givenumber.update');
Route::get('/giveNumber',[GivenumberController::class,'create']);
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
