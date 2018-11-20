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
// 后台登录
Route::resource('/adminlogin','Admin\AdminLoginController');

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

    //个人中心
Route::group([],function(){
    // 首页
    Route::resource('/userinfo','Home\UserInfoController');
    //我的资料
    Route::resource('/myinformation','Home\InformationController');
    //我的优惠券
    Route::resource('/mycoupon','Home\CouponController');
    //居住地址
    Route::get('/infoaddress','Home\InformationController@infoaddress');
    //我的评价
    Route::resource('/myevaluation','Home\MyevaluationController');
    //我的订单
    Route::resource('/myorder','Home\MyorderController');
    //我的地址
    Route::resource('/myaddress','Home\MyaddressController');
    //我的地址删除
    Route::get('/myaddressdel','Home\MyaddressController@del');
    //默认地址修改
    Route::get('/myaddressmoren','Home\MyaddressController@moren');
});



Route::group(['middleware'=>'adminlogin'],function(){
        // 后台首页
        Route::resource('/admin','Admin\AdminController');
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
        

});
