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
		

				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						<h3 style="background-color:#fff ;padding: 15px;width: 980px;">
	                        <strong style="font-size: 18px;color: #333333;">领券中心</strong>
						</h3>
							
							<div class="tab-content" style="width: 1000px;margin-top: 0px;border:1px #fff solid; border-top:transparent;margin-left: 30px;">
								 <div id="profile" class="tab-pane active" style="padding: 00px 00px;">
								
								 <div style="margin-top: 20px;">
								 	@foreach ($coupon as $key=>$value)
								 	<div style="float: left; ">
								 		<div style="background-image: url(/static/home/images/z-44.png);width: 226px;height: 288px;">
								 			@if ( date('Y-m-d h:i:s',time()) > $value->start_time && date('Y-m-d h:i:s',time()) < $value->stop_time)
								 			<span  style="float: left;margin-left: 65px;width:100px;text-align:center;margin-top:3px;font-size: 12px;padding: 2px;background-color: #51a2a5;color: #fff;">即将过期</span>
											@endif
											@if ( date('Y-m-d h:i:s',time()) > $value->stop_time)
								 			<span  style="float: left;margin-left: 65px;width:100px;text-align:center;margin-top:3px;font-size: 12px;padding: 2px;background-color: #51a2a5;color: #fff;">已过期</span>
											@endif
											@if ( date('Y-m-d h:i:s',time()) < $value->start_time)
								 			<span  style="float: left;margin-left: 65px;width:100px;text-align:center;margin-top:3px;font-size: 12px;padding: 2px;background-color: #51a2a5;color: #fff;">即将开始</span>
											@endif
											
								 		    <span style="font-size: 40px;color: #fff;margin-top: 50px;display: block;position: absolute;margin-left: 65px;">￥{{$value->c_pri}}</span>
								 		    
								 		    <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:100px;margin-left: 65px;">[满{{$value->min_pri}}元减{{$value->c_pri}}元]</dl>
								 		     <dl style="color: #fff;font-size: 12px;position: absolute;margin-top:120px;margin-left: 40px;">{{$value->start_time}}至{{$value->stop_time}}</dl>
								 		     
								 		    <dl style="color: #686868;font-size: 12px;position: absolute;margin-top:170px;margin-left: 20px;">券号：{{$value->id}}
								 		    <dl style="color: #686868;font-size: 12px;position: absolute;;">适用商品：{{$cate[$key]->name}}
								 		    	
								 		   <a  href="javascript:;" @if ( date('Y-m-d h:i:s',time()) > $value->start_time && date('Y-m-d h:i:s',time()) < $value->stop_time) onClick="lq({{$value->id}})"  @endif>
								 		    <span style="float:left;border: 1px #81cccd solid;color: #81cccd;padding: 2px;display: block;text-align: center;margin-left: 100px;margin-top: -20px;    width: 80px;" >立即领取  >  </span></a>
								 		   
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
		<script type="text/javascript" src="/static/home/js/ms_common.min.js"></script>
	</body>
<script>
	
	// function lq(id){
	// 	$.ajax({
	// 		type:'GET',
	// 		url:'/homeCouponlq',
	// 		data: {id:id},
	// 		dataType: 'json',
	// 		success: function(data){

	// 			if(data.msg==0){
					
					
	// 			} else if (data.msg==1){
					
	// 			}else{
	// 				alert('领取失败');
	// 			}		
	// 		},
	// 		error:function(data) {
	// 			console.log(data.msg);
	// 		},
	// 	});
	// }
	function lq(id){
	
		$.ajax({
			type: 'GET',
			url: '/homeCouponlq',
			data: {id:id},
			dataType: 'json',
			success: function(data){
			
				if(data.msg==0){
					alert('你已经领取过了!');
					
				} else if (data.msg==1){
					alert('领取成功!');
				}else{
					alert('领取失败，请稍后再试!');
				}		
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	
}

</script>
</html>




 @endsection
@section('title','领券中心') 