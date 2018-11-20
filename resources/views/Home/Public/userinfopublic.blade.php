<html>
 <head> 
  <meta charset="utf-8" /> 
  <title>@yield('title')</title> 
  <meta name="keywords" content="" /> 
  <meta name="description" content="" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/safe/css.css" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/safe/common.min.css" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/safe/ms-style.min.css" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/safe/personal_member.min.css" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/safe/Snaddress.min.css" /> 
  <link rel="stylesheet" href="/static/Home/UserInfo/css/sui.css" /> 
  <script type="text/javascript" src="/static/Home/UserInfo/js/jquery-1.9.1.min.js"></script> 
  <script type="text/javascript" src="/static/Home/UserInfo/js/sui.js"></script> 
  <style>
		body {
		    background: #f5f5f5;
		}
			.sui-table th{
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 14px;
		    color: #333333;
		   }
		   .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 12px;
		    color: #333333;
		   }
	img {
	    max-width: 100%;
	    height: auto;
	    /*vertical-align: bottom;*/
	    border: 0;
	    -ms-interpolation-mode: bicubic;
	    margin-left: -10px;
	}
a{
	color: #000000;
}
.moren1{padding: 2px;font-size: 10px;color: #EC5937;border-radius:5px;background-color: #fad5d0;border: 1px #C85E0B solid;}
.moren2{color:purple;}
		</style> 
 </head> 
 <body class="ms-body"> 
  <div id="" class="ng-top-banner"></div> 
  <div class="ng-toolbar" style="background:orange"> 
   <div class="ng-toolbar-con wrapper" > 
    <div class="ng-toolbar-left"> 
     <a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;" href="/"> <span><img src="/static/Home/UserInfo/img/Home.png" style="margin-right: 10px;" />返回买啦首页</span> </a> 
     
     </div> 
    </div> 
    <div id="ng-minicart-slide-box"></div> 
   </div> 
  </div> 
  <header class="ms-header ms-header-inner ms-head-position"> 
   <article class="ms-header-menu"> 
    <style type="text/css">
					.nav-manage .list-nav-manage {
						position: absolute;
						padding: 15px 4px 10px 15px;
						left: 0;
						top: -15px;
						width: 90px;
						background: #FFF;
						box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
						z-index: 10;
					}
					
					.ms-nav li {
						float: left;
						position: relative;
						padding: 0 20px;
						height: 44px;
						font: 14px/26px "Microsoft YaHei";
						color: #FFF;
						cursor: pointer;
						z-index: 10;
					}
					.personal-member .main-wrap {
    width: 1068px;
    margin: 15px 0 30px 180px;
    padding: 0 0 39px 0;
    border: 1px solid #ddd;
    background: none;
}
				</style> 
    <div class="header-menu"> 
     <div class="ms-logo"> 
      <a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">我的买啦</span></a> 
     </div> 
     <nav class="ms-nav"> 
      <ul> 
       <li class=""><a href="" data-url="" style="    padding-bottom: 17px;border-bottom: 3px #fff solid;">首页</a><i class="nav-arrow"></i></li> 
       <li class="nav-manage selected"> <a href="" data-url="">账户管理<em hidden=""></em></a><i class="nav-arrow" hidden=""></i> 
        <div class="list-nav-manage " hidden=""> 
         <p class="nav-mge-hover">账户管理<em></em></p> 
         <p><a>个人资料</a></p> 
         <p><a>安全设置</a></p> 
         <p><a>账号绑定</a></p> 
         <p><a>地址管理</a></p> 
        </div> </li> 
       <li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li> 
      </ul> 
      <div class="ms-search"> 
       <form> 
        <input id="" type="text" value="" /> 
        <img src="/static/Home/UserInfo/img/搜索.png" style="height: 10px;width: 10px;float: right;margin-right: 10px;" /> 
       </form> 
      </div> 
     </nav> 
    </div> 
   </article> 
   <article class="ms-useinfo"> 
    <div class="header-useinfo" id=""> 
     <div class="ms-avatar"> 
      <div class="useinfo-avatar"> 
       <img src="/static/Home/UserInfo/img/头像.png" /> 
       <div class="edit-avatar"></div> 
       <a class="text-edit-avatar">修改</a> 
      </div> 
      <a>{{session('username')}} </a> 
     </div> 
     <div class="ms-name-info"> 
      <div class="link-myinfo"> 
       <a>我的编号:99653</a> 
      </div> 
      <div class="info-member"> 
       <span class="name-member member-1"> <i></i><a target="_blank">注册会员</a></span> 
       <span style="margin-left: 20px;"> <a  href="/myinformation?id={{session('id')}}">我的资料</a></span> 
      </div> 
      <div class="info-safety"> 
       <span class="safety-lv lv-3"> <a>安全等级：<span>中</span></a> </span> 
       <a class="bind-phone"> <i style="background-image: url(/static/Home/UserInfo/img/修改手机.png);"></i>修改手机</a> 
       <a class="bind-email"> <i style="background-image: url(/static/Home/UserInfo/img/绑定邮箱.png);"></i>修改邮箱</a> 
       <a class="manage-addr" href="/myaddress?id={{session('id')}}"><i style="background-image: url(/static/Home/UserInfo/img/地址管理.png);"></i>地址管理</a> 
      </div> 
     </div> 
    </div> 
   </article> 
  </header> 
  <div id="ms-center" class="personal-member"> 
   <div class="cont"> 
    <div class="cont-side"> 
     <div class="side-neck" style="margin-top: 20px;"> 
      <i></i> 
     </div> 
     <div class="ms-side" style="margin-top: 20px;"> 
      <article class="side-menu side-menu-off"> 
       <dl class="side-menu-tree" style="padding-left: 30px;"> 
        <dt>
         <img src="/static/Home/UserInfo/img/左侧/我的购物车.png" style="margin-right: 10px;margin-left: -20px;" />我的购物车
        </dt> 
        <dt>
         <img src="/static/Home/UserInfo/img/左侧/file.png" style="margin-right: 10px;margin-left: -20px;" />订单管理
        </dt> 
        <dd> 
         <a href="/myorder?id={{session('id')}}">我的订单</a> 
        </dd> 
        <dd> 
         <a href="宝贝收藏.html">我的收藏</a> 
        </dd> 
        <dd> 
         <a href="/myevaluation?id={{session('id')}}">我的评价</a> 
        </dd> 
        <dd> 
         <a href="我的足迹.html">我的足迹</a>
        </dd> 
        <dd> 
         <a href="我的拍卖.html">我的拍卖</a> 
        </dd> 
        <dd> 
         <a href="/mycoupon?id={{session('id')}}">我的优惠券</a> 
        </dd> 
        <dt>
         <img src="/static/Home/UserInfo/img/左侧/我的买啦.png" style="margin-right: 10px;margin-left: -20px;" />我的买啦
        </dt> 
        <dd> 
         <a href="我的推荐.html">我的推荐</a> 
        </dd> 
        <dd> 
         <a href="我的钱包.html">我的钱包</a> 
        </dd> 
        <dd> 
         <a href="我要提现.html">我要提现</a> 
        </dd> 
        <dd> 
         <a href="买豆">我的买豆</a> 
        </dd> 
        <dd> 
         <a href="邀请管理-收入明细.html">邀请管理</a> 
        </dd> 
        <dt>
         <img src="/static/Home/UserInfo/img/左侧/v-card-3.png" style="margin-right: 10px;margin-left: -20px;" />售后服务
        </dt> 
        <dd> 
         <a href="退换货.html">退换货</a> 
        </dd> 
        <dd> 
         <a href="意见投诉.html" style="color:#f70">意见/投诉</a> 
        </dd> 
       </dl> 
       <a ison="on" class="switch-side-menu icon-up-side"><i></i></a> 
      </article> 
     </div> 
    </div> 
    <div class="cont-main"> 
     <div class="main-wrap mt15" style="border: 0px;"> 
      <!--<h3>
	                        <strong>我的会员等级</strong>
	                    </h3>--> 
      <div class="server-wrapper"> 
       <div class="server-tab" style="margin-top: 26px;"> 

			
			@section('content')

			@show


       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
  <div class="clear "></div> 
  <div class="ng-footer "> 
   <textarea class="footer-dom " id="footer-dom-02 "> </textarea> 
   <div class="ng-fix-bar "></div> 
  </div> 
  <style type="text/css ">
		
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
		
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style> 
  
 </body>
</html>