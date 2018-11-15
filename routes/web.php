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



Route::group(["middleware"=>"index"],function(){
	//后台分类管理模块
Route::resource('/adminCate','Admin\CateController');
//ajax删除分类
Route::get('/adminCatedel','Admin\CateController@del');
//ajax下架分类
Route::get('/adminCatestop','Admin\CateController@stop');
//优惠券管理
Route::resource('/adminCoupon','Admin\CouponController');
//优惠券删除
Route::get('/adminCoupondel','Admin\CouponController@del');
//优惠券显示
Route::get('/adminCouponstop','Admin\CouponController@stop');
//后台物流管理
Route::resource('/adminLog','Admin\LogController');
//删除物流
Route::get('/adminLogdel','Admin\LogController@del');
//物流显示隐藏操作
Route::get('/adminLogstop','Admin\LogController@stop');
//后台品牌管理
Route::resource('/adminBrand','Admin\BrandController');
//品牌删除
Route::get('/adminBranddel','Admin\BrandController@del');
//品牌显示
Route::get('/adminBrandstop','Admin\BrandController@stop');
});
//前台首页
Route::resource('/home',"Home\HomeController");