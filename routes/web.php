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

Route::resource("/","Home\IndexController");


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
  
   Route::get('/adminout','Admin\AdminController@out');
        //后台订单表
        Route::resource('/adminOrder','Admin\OrderController');
        //订单详情表
        Route::resource('/adminorderinfo','Admin\OrderinfoController');
        // 发货按钮
        Route::get('/adminorders/{id}','Admin\OrderinfoController@static');
        //后台用户评论模块
        Route::resource('/adminReviews','Admin\ReviewsController');
        //ajax评论删除
        Route::get('/reviewsajax','Admin\ReviewsController@reviewsajax');

	//后台链接管理模块
	Route::resource('/adminLink','Admin\LinkController');
	//后台链接删除
	Route::get('/adminLinkdel','Admin\LinkController@del');
	//后台链接显示
	Route::get('/adminLinkstatus','Admin\LinkController@under');
	//后台链接批量删除
	Route::get('/adminLinkdelall','Admin\LinkController@delall');
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
    
    Route::resource("/indexBlog","Home\BlogController");
    Route::resource("/index","Home\IndexHomeController");
    Route::get("/blogpost/{id}","Home\BlogController@blogpost");



// 注册登录
Route::group([],function(){
    // 图片验证码
    Route::get('/captcha','Home\RegisterController@captcha');
    //注册控制器
    Route::resource('/registercontroller','Home\RegisterController');
    //检测手机号码是否注册
    Route::get('/homeloginphone','Home\RegisterController@homeloginphone');
    //获取验证码
    Route::get('/homephone','Home\RegisterController@homephone');
    // 验证码对比
    Route::get('/homecode','Home\RegisterController@homecode');
    //邮箱注册
    Route::get('/homeemail','Home\RegisterController@homeemail');
    Route::post('/dohomeemail','Home\RegisterController@dohomeemail');
    Route::get('/send','Home\RegisterController@send');
    // 判断邮箱是否被注册
    Route::get('/dohomeemailajax','Home\RegisterController@dohomeemailajax');
    // 判断输入的图片验证码是否正确
    Route::get('/yanzhengma','Home\RegisterController@yanzhengma');
    // 邮箱激活
    Route::get('/jihuo','Home\RegisterController@jihuo');
///---------下面登录
    // 用户名登录界面
    Route::resource('/homelogin','Home\LoginController');
    // 手机号登录界面
    Route::get('/phonelogin',function(){
        return view('Home.Login.phonelogin');
    });
    // 处理手机登录
    Route::post('/dophonelogin','Home\LoginController@dophonelogin');
    Route::get('/phoneloginajax','Home\LoginController@phoneloginajax');
    Route::get('/phoneloginajaxyzm','Home\LoginController@phoneloginajaxyzm');
    // 邮箱登录界面
    Route::get('/emaillogin',function(){
        return view('Home.Login.emaillogin');
    });
    //处理邮箱登录
    Route::post('/doemaillogin','Home\LoginController@doemaillogin');

});
// 找回密码
Route::group([],function(){
    Route::resource('/retrieve','Home\RetrieveController');
    // 短信验证码ajax
    Route::get('/phoneretrieveajax','Home\RetrieveController@phoneretrieveajax');
    //短信重置密码页面
    Route::post('/phoneretrieves','Home\RetrieveController@phoneretrieves');
    //处理短信修改密码页面
    Route::post('/dophoneretrieves','Home\RetrieveController@dophoneretrieves');

    // 邮箱找回密码
    Route::get('/emailretrieve','Home\RetrieveController@emailretrieve');
    Route::post('/emailretrieves','Home\RetrieveController@emailretrieves');
    Route::get('/emailpass','Home\RetrieveController@emailpass');
    Route::post('doemailpass','Home\RetrieveController@doemailpass');
});



        


//前台
Route::resource('/homeShop','Home\ShopController');
Route::resource('/homeCart','Home\CartController');
Route::get('/homeCartprice','Home\CartController@getprice');
Route::get('/homeShopcol','Home\ShopController@wishlist');
Route::post('/homeShopcoldel','Home\ShopController@delwish');

