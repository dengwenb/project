<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pic', function () {
    return view('Admin.Admin.picture');
});
// 后台登录
Route::get('/login',function(){
	return view('login');
});
// 后台模块
Route::resource('/admin','Admin\AdminController');
//后台管理员模块
Route::resource('/adminstrator','Admin\AdministratorsController');
// 后台会员模块
Route::resource('/adminuser','Admin\UserController');
//后台订单管理
Route::resource('/adminorder','Admin\OrderController');
//后台设置模块
Route::resource('/adminsystem','Admin\SystemController');
//后台用户评论模块
Route::resource('/adminreviews','Admin\ReviewsController');
//后台图片管理
Route::resource('/adminpicture','Admin\PictureController');
