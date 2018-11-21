@extends('Home.Public.userinfopublic')
@section('content')
<div style=" float: left;vertical-align: bottom;text-align: center;">
								<div style="width: 680px;padding: 10px;float: left;background-color: #fff;height: 250px;">
								<div style="float: left;width:200px ;height: 152px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
									<div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
										<span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px;    margin-top:20px;">2016年4月</span>
										<span style="font-size: 36px;color: #F88600;display: block;    display: block; width: 100px; margin-left: 50px;margin-top: 28;">12</span>
									     <input  type="button" value="签到领买豆" style="background-color: #f56a48;border-radius: 5px;color: #fff; font-size:14px;border: 0px;width: 107px;height: 26px;margin-top: 30px;" />
									</div>
								</div>
								
								<div style="float: left;width:200px ;height: 152px;;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
									<div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
										<span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px; margin-bottom: 20px;   margin-top: 20px;">我的资产</span>
									    <span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;">显示今日收益</span>
										<img src="img/我的买豆/矢量智能对象.png" style="position: absolute; margin-top: 30px;  margin-left: -80px;;" />	
									</div>
								</div>
								
								<div style="float: left;width:200px ;height: 152px;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
									<div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
										<span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px;    margin-top: 20px; margin-bottom: 20px;">我的买豆</span>
										<span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;">显示今日收益</span>
									    <img src="img/我的买豆/猪的图标.png" style="position: absolute; margin-top: 13px;  margin-left: -80px;;" />									</div>
								</div>
								
								<div style="border-top:1px #ccc solid;width: 650px;position: absolute;margin-top: 200px;margin-left: 20px;float: left;"></div>
								<div style="position: absolute;margin-top: 230px;font-size: 14px;color: #686868;float: left;">
									<span style="margin-left: 20px;">待付款</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span >待发货</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>待收货</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>待评价</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>退款</span>
									
								</div>
								</div>	
								
								
								<!--
                                	作者：右侧
                                	时间：2016-05-24
                                	描述：
                                -->
								<div style="float: left;width:250px ;height: 152px;margin-left: 20px;">
								 <p style="font-size: 14px;color: #686868;text-align:center;background-color: #fff;padding: 10px;color: #F88600;font-size: 14px;">菜单管理</p>
								 <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">我的优惠券</p>
								 	<img src="img/个人中心/组-15.png"/>
								 	<img src="img/个人中心/组-14.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">全部优惠券(<font color="red">96</font>)</p>
								 </div>
								
								<div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
								 	<p style="font-size: 20px;text-align: left;">收藏的商品</p>
								 	<img src="img/个人中心/形状-1.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">您的收藏空空的，赶紧<br/>
								 	去首页看看购物吧</p>
								 </div>
								
								<div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">购物车</p>
								 	
								 	 <div style="float:left ;">
								 	 	 <img src="img/个人中心/屏幕快照-2016-04-08-15.50.46.png" style="margin-top: 10px;height: 100px;width: 100px;float: left;margin-left: 20px;"/>
								 	 	<br />
								 	<span style="display: block;float: left;margin-left: 40px;color: #f78642;font-size: 16px;">¥156</span>
								 	<del style="float: left;margin-left: 20px;">¥189</del>
								 		<p style="width: 100px;margin-left: 20px;font-size: 12px;color: #686868;">化妆水化妆水化妆水化妆水化妆水化妆水</p>
								 	 </div>
								 	
								   <p style="margin-top: 30px;font-size: 14px;color: #686868;">查看购物车(<font color="red">96</font>)</p>
								   
								</div>
								
								
								<div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">我的足迹</p>
								 	<img src="img/个人中心/矢量智能对象.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">您还没有留下任何足迹呢！</p>
								 </div>
								
								
								</div>
								
								<!--右侧---end------->
								
								<div style="width: 680px;padding:10px;display: inline-block; float: left;margin-top: 20px;background-color: #fff;">
									<div style="border-bottom: 1px #ccc solid;">
										<p style="font-size: 20px;text-align: left;">我的物流</p>
									</div>
									<div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
										<div style="float: left;margin-top: 10px;">
											<img src="img/宝贝收藏/组-58.png" />
										</div>
										<div style="float: left;margin-top: 20px;">
											<p>在浙江临安市公司市区北方扫描，快件已被签收</p>
											<p>2016-04-10 12:20:30  <strong>查看物流信息</strong> </p>
										</div>
										<div style="float: right;margin-right: 20px;margin-top: 50px;">
											<button style="border: 1px #ccc solid;padding: 5px;background-color: #fff;">确认收货</button>
										</div>
										
									</div>
									
									<p style="text-align: center;margin-top: 30px;">展开全部信息</p>
									 <!--<div style="float:left;display: inline;border: 1px #ccc solid;display: inline-block;background-color: #f5f5f5;height: 25px;width: 150px;"> 
                                        <input type="text" placeholder="搜索会员编号"  style="padding-left:5px;width:130px;border: 0px;background-color: #fff;line-height: 25px;border-right: 0px #ccc solid;" />
									    <img src="img/搜索.png"  style="height: 10px;width: 10px;  margin-left: 2px; margin-bottom: 5px;" />
                                        </div> -->
								</div>
								
								<div style="width: 680px;padding:10px;display: inline-block; margin-top: 20px;background-color: #fff;float: left;border-bottom: 1px #ccc solid;padding-bottom: 20px;">
									<span style="text-align: left;line-height: 20px;">根据浏览 猜你喜欢</span>
								</div>
								<div style="width: 680px;padding:10px;display: inline-block; margin-top:0px;background-color: #fff;float: left;">
									<div style="padding:10px ;text-align: center;float: left;">
										<div style="float: left;margin-left: 30px">
											<img src="img/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
										
										
									</div>
								</div>
</div>
@endsection
@section('title','个人中心')