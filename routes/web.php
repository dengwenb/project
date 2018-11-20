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

//后台
Route::group(["middleware"=>"index"],function(){
	//后台链接管理模块
	Route::resource('/adminLink','Admin\LinkController');
	//后台链接删除
	Route::get('/adminLinkdel','Admin\LinkController@del');
	//后台链接显示
	Route::get('/adminLinkstatus','Admin\LinkController@under');
	//后台链接批量删除
	Route::get('/adminLinkdelall','Admin\LinkController@delall');
	//后台文章管理模块
	Route::resource('/adminArticle','Admin\ArticleController');
	//后台链接删除
	Route::get('/adminArticledel','Admin\ArticleController@del');
	//后台链接显示
	Route::get('/adminArticlestatus','Admin\ArticleController@under');
	//后台链接批量删除
	Route::get('/adminArticledelall','Admin\ArticleController@delall');
	//
	Route::get('/adminArticleshow','Admin\ArticleController@delall');
	Route::get('/adminArticledel','Admin\ArticleController@del');

	//轮播图管理
	Route::resource('/adminBroadcast','Admin\BroadcastController');
	//修改轮播图状态
	Route::get('/adminBroadcaststatus','Admin\BroadcastController@under');
	//轮播图批量删除
	Route::get('/adminBroadcastdelall','Admin\BroadcastController@delall');
	//图片管理
	Route::resource('/adminPicture','Admin\PictureController');
	//公告管理
	Route::resource('/adminBulletin','Admin\BulletinController');
	//更新公告优先级
	Route::get('/adminBulletinedit','Admin\BulletinController@myedit');
	//修改公告状态
	Route::get('/adminBulletinstatus','Admin\BulletinController@status');
	//批量删除公告
	Route::get('/adminBulletindelall','Admin\BulletinController@delall');
	//商品管理
	Route::resource('/adminShop','Admin\ShopController');
	//添加商品图片
	Route::get('/adminPictureadd/{id}','Admin\ShopController@picadd');
	//获取商品对应类下的属性
	Route::get('/adminShopgetattr','Admin\ShopController@getattr');
	//获取商品对应属性下的属性值
	Route::get('/adminShopgetvalue','Admin\ShopController@getvalue');
	//修改商品状态
	Route::get('/adminShopstatus','Admin\ShopController@myedit');
	//更新商品规格
	Route::post('/adminShopupdate/{id}','Admin\ShopController@attrupdate');
	//显示商品规格
	Route::get('/adminShopattr/{id}/{cateid}','Admin\ShopController@attrshow');
	//模块管理
	Route::resource('/adminModule','Admin\ModuleController');
	//模块批量删除
	Route::get('/adminModuledelall','Admin\ModuleController@delall');
	//修改模块状态
	Route::get('/adminModulestatus','Admin\ModuleController@myedit');
	//删除商品属性
	Route::get('/adminShopadel','Admin\ShopController@attrdel');
	//库存管理
	Route::resource('/adminSku','Admin\SkuController');
	Route::get('/adminSkuchange','Admin\SkuController@change');
	Route::get('/adminSkuorder','Admin\SkuController@order');
	Route::get('/adminSkushop','Admin\SkuController@shop');
	Route::get('/adminSkuship','Admin\SkuController@ship');
});

//前台
Route::resource('/homeShop','Home\ShopController');