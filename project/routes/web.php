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

//后台登录  
Route::resource("/adminlogin","Admin\AdminloginController");

Route::group(['middleware'=>'adminlogin'],function(){
    // 后台模块
    Route::resource('/admin','Admin\AdminController');
    //后台管理员模块
    Route::resource('/adminAdminUser','Admin\AdminUserController');
    //后台会员模块
    Route::resource("/adminAdminVip",'Admin\AdminVipController'); 
    //后台权限管理
    Route::resource("/adminRolelist","Admin\RolelistController");
     //后台栏目管理
    Route::resource("/adminColumn","Admin\ColumnController");
    //商品套餐
    Route::resource("/adminShop","Admin\ShopController");

    //后台权限分配
    Route::get("/list/{id}","Admin\RolelistController@auth");
    //后台权限保存
    Route::post("/saveauth","Admin\RolelistController@saveauth");
     //后台用户密保状态修改
    Route::get("/adminvipque","Admin\AdminVipController@que");
    //权限限制信息提示
    Route::get("mes","Admin\AdminController@mes");
     //后台ajax删除
    Route::get("/adminuserdel",'Admin\AdminUserController@del');
    //后台密码修改
    Route::get('/adminuserres','Admin\AdminUserController@res');
    //后台用户状态修改
    Route::get("/adminvipsta","Admin\AdminVipController@sta");
    // //后台栏目管理删除
    Route::get("/admincolumndel","Admin\ColumnController@del");
    //后台会员信息密码重置
    Route::get("/adminvipres","Admin\AdminVipController@res");
    //后台会员查看密保
    Route::get("/adminvipques/{id}","Admin\AdminVipController@ques");
    //后台会员查看地址
    Route::get("/adminvipaddress/{id}","Admin\AdminVipController@address");

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
});
    
    Route::resource("/indexBlog","Home\BlogController");
    Route::resource("/index","Home\IndexHomeController");
    Route::get("/blogpost/{id}","Home\BlogController@blogpost");


