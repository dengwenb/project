@extends("Home.Public.public")
@section("home")
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/static/home/css/safe/css.css" />
		<link rel="stylesheet" href="/static/home/css/safe/common.min.css" />
		<link rel="stylesheet" href="/static/home/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="/static/home/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="/static/home/css/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="/static/home/css/sui.css" />
			<script type="text/javascript" src="/static/home/js/jquery-1.9.1.min.js" ></script>
		<script type="text/javascript" src="/static/home/js/sui.js" ></script>
		<style>
			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
			a{
				color: #000000;
			}
			.sui-table th, .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    
		}
	 .sui-nav.nav-tabs > .active > a {
	    font-weight: bold;
	    border:1px #fff solid;
	    background-color: #fff;
	     border-bottom-color: transparent; 
	    cursor: default;
	    font-weight: bold;
	    color: #F2873B;
		}
		.sui-nav.nav-tabs > li > a {
		    color: #333333;
		    line-height: 18px;
		    -webkit-border-radius: 3px 3px 0 0;
		    -moz-border-radius: 3px 3px 0 0;
		    border-radius: 3px 3px 0 0;
		   border: 1px #fff solid;
		    border-bottom: 1px #fff solid;
		    height: 30px;
		    width: 110px;
		    text-align: center;
		    padding-top: 10px;
		    font-size: 14px;
		}
		.sui-nav.nav-tabs {
		    border-bottom: 1px solid #CECECE;
		    padding-left: 5px;
		}
		.sui-nav.nav-tabs > .active > a:hover {
			  font-weight: bold;
		    cursor: default;
		    font-weight: bold;
		    color: #F37B1D;
		}
		.sui-nav.nav-tabs > li {
		    margin-bottom: -1px;
		     background-color: #fff; 
		     border-bottom: 1px #ccc solid;
		}
		.sui-nav.nav-tabs > .active {
		    border-bottom: 0;
		}
		.sui-nav.nav-tabs > li + li {
		    margin-left: -3px;
		}
		</style>
	</head>

	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
	
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
				<div class="side-neck" style="margin-top: 20px;">
						<i></i>
					</div>
					<div class="ms-side" style="margin-top: 20px;" >
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree" style="padding-left: 30px;">
								<dt><img src="img/左侧/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/>我的购物车</dt>
								<dt><img src="img/左侧/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
								<dd>
									<a href="我的订单标注.html">我的订单</a>

								</dd>
								<dd>
									<a href="宝贝收藏.html">我的收藏</a>

								</dd>
								<dd>
									<a href="我的评价.html">我的评价</a>

								</dd>
								<dd>
									<a href="我的足迹.html">我的足迹</a>

								</dd>
								<dd>
									<a href="我的拍卖.html">我的拍卖</a>

								</dd>
								<dd>
									<a>我的优惠券</a>

								</dd>
								<dt><img src="img/左侧/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>我的买啦</dt>
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
								<dt><img src="img/左侧/v-card-3.png"  style="margin-right: 10px;margin-left: -20px;"/>售后服务</dt>
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
						<h3 style="background-color:#fff ;padding: 15px;width: 980px;">
	                        <strong style="font-size: 18px;color: #333333;">我的全部优惠券</strong>
						</h3>
								<div class="profile-info">
								<div class="control-group clearfix " style="margin-top: 21px;width: 1010px;">
									<div style="margin-top: -40px;border-bottom: 1px #ccc solid;height: 30px;";>
									
										 	
                                        <div style="float:right;display: inline;margin-left:60px;margin-top: -10px;border: 1px #ccc solid;display: inline-block;background-color: #fff;height: 25px;margin-right: 100px;margin-bottom: 5px;    padding-right: 10px;">
                                        <input type="text" placeholder="店铺名称"  style="padding-left:5px;width:130px;border: 0px;background-color: #fff;line-height: 25px;border-right: 0px #ccc solid;margin-bottom: 5px;" />
									    <img src="img/搜索.png"  style="height: 10px;width: 10px;" />
                                        </div> 
                                          <a style="margin-left: 20px;float: right;margin-right: 0px;float: right;    margin-right: -300px;color: #007AFF;">查看历史记录</a>
									 </div>
								</div>
							</div>
							<div class="tab-content" style="width: 1000px;margin-top: 0px;border:1px #fff solid; border-top:transparent;">
								 <div id="profile" class="tab-pane active" style="padding: 00px 00px;">
								 <div style="width: 100%;height: 50px;border: 1px #ccc solid;line-height: 50px;padding-left: 20px;background-color: #fdfdfd">
								 	<a href="javascript:;" onClick=func(0)><span style="color: #333333;margin-left: 20px;">未使用&nbsp;&nbsp;{{count($wei)}} </span></a>
								 	<a href="javascript:;"  onClick=func(1)><span style="color: #333333;margin-left: 20px;">已使用&nbsp;&nbsp;{{count($use)}}  </span></a>
								 	<a href="javascript:;"  onClick=func(2)><span style="color: #333333;margin-left: 20px;">已过期&nbsp;&nbsp;{{count($guo)}}</span></a>
								 	
								 	
								 </div>

								 <div style="margin-top: 20px;"   >
								 	
								 	
								 	
								 	<!-- 未使用 -->
								 	@foreach ($wei as $key=>$value)
								 	<div style="float: left;margin-left: 20px; "  class="zewo">
								 		<div style="background-image: url(/static/home/images/z-43.png);width: 226px;height: 288px;">
								 		
								 		    <span style="font-size: 25px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 10px;">￥{{$value->cpri}}</span>
								 		    <span style="font-size: 20px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 130px;font-weight: bold;">全店通用</span>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:100px;margin-left: 10px;">适用商品：{{$cate[$key]->name}}</dl>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:120px;margin-left: 10px;">使用条件：满{{$value->cmin}}</dl>
								 		     <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:140px;margin-left: 10px;">有效时间：{{$value->cstart}}<br>至{{$value->cstop }}</dl>
								 		     <a href=""><dl style="color: green;font-size: 30px;position: absolute;margin-top:190px;margin-left: 10px;">点我去购物</dl></a>
								 
								 		</div>
								 		
									
										
								 	</div>
								 	@endforeach
									<!-- 已使用 -->
									@foreach ($use as  $key=>$value)
								 	<div style="float: left;margin-left: 20px;display:none; " class="one" >

								 		<div style="background-image: url(/static/home/images/z-43.png);width: 226px;height: 288px;">
								 		
								 		   <span style="font-size: 25px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 10px;">￥{{$value->cpri}}</span>
								 		    <span style="font-size: 20px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 130px;font-weight: bold;">全店通用</span>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:100px;margin-left: 10px;">适用商品：{{$cate[$key]->name}}</dl>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:120px;margin-left: 10px;">使用条件：满{{$value->cmin}}</dl>
								 		     <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:140px;margin-left: 10px;">有效时间：{{$value->cstart}}<br>至{{$value->cstop }}</dl>
								 		     <dl style="color: red;font-size: 30px;position: absolute;margin-top:190px;margin-left: 50px;">已使用</dl>
								 		    
								 		
								 		</div>
										
								 		
								 	</div>
									@endforeach

									<!-- 已过期 -->
									@foreach ($guo as $key=>$value)
								 	<div style="float: left;margin-left: 20px; display:none; " class="twe">
								 		<div style="background-image: url(/static/home/images/z-43.png);width: 226px;height: 288px;">
								 		
								 		     <span style="font-size: 25px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 10px;">￥{{$value->cpri}}</span>
								 		    <span style="font-size: 20px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 130px;font-weight: bold;">全店通用</span>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:100px;margin-left: 10px;">适用商品：{{$cate[$key]->name}}</dl>
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:120px;margin-left: 10px;">使用条件：满{{$value->cmin}}</dl>
								 		     <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:140px;margin-left: 10px;">有效时间：{{$value->cstart}} <br> 至{{$value->cstop }}</dl>
								 		      <dl style="color: red;font-size: 30px;position: absolute;margin-top:190px;margin-left: 50px;">已过期</dl>

								 		 
								 		
								 		</div>
									
								 		
								 	</div>
								 	@endforeach

								 </div>



								


								 
								 </div>
						    </div>		 
								  	
								  	
					</div>
				</div>

			</div>
		</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">

			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<script>
		function func (a){

			
			if (a==0) {
				
				$('.one').hide();
				$('.zewo').show();
				$('.twe').hide();

			}else if(a==1){
				

				$('.zewo').hide();
				$('.one').show();
				$('.twe').hide();

			}else if (a==2) {
				$('.zewo').hide();
				$('.one').hide();
				$('.twe').show();


			};
		}

		</script>
		<style type="text/css">
		    .yuan{
		    	height: 30px;
    width: 30px;
    border-radius: 50%;
    background-color: #64bdc5;
    display: block;
    text-align: center;
    vertical-align: middle;
    line-height: 30px;
    color: #fff;
    font-size: 18px;
    margin-top: 50px;
    
		    }
		
			.ng-footer {
				height:514px;
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
		<script type="text/javascript" src="/static/home/js/safe/ms_common.min.js"></script>
	</body>

</html>
@endsection
@section('title','领券中心') 