@extends('Home.Public.userinfopublic')
@section('content')
<div class="server-tab" style="margin-top: 20px;">
								<div style=" width: 503px;height: 180px;float: left;border: 1px #CCC solid;">
									<h3 style="margin-top: 0px;font-size: 14px;color: #333333;">个人信息</h3>
									<div style="float: left;width: 50%;">
										<p style="margin-left: 42px;">会员名:&nbsp;&nbsp;{{$data->username}}</p>
										<p style="margin-left: 42px;">地&nbsp;&nbsp;址:&nbsp;&nbsp;{{$data->address}}</p>
										<p style="margin-left: 42px;">认证信息:&nbsp;&nbsp;<img src="/static/Home/UserInfo/img/认证.png"><img src="/static/Home/UserInfo/img/组-1-拷贝.png" style="margin-left:5px;"></p>
									</div>
									<div style="float: left;">
										<span>联系方式 :</span>
										<span style="background-color: #FFFDF1;padding: 2px;border-radius:2px;border: 1px #ccc solid;margin-left: 10px;">{{$data->phone}}</span>
									</div>
									
								</div>
								<div style=" width: 503px;height: 180px;float: left;border: 1px #CCC solid;margin-left: 10px;">
									<p style="margin-top: 0px;font-size: 14px;color: #333333;font-weight: bold;margin-top: 10px;margin-left: 10px;">评价小贴士</p>
									<ul style="    list-style: none;margin-left: 20px;font-size: 12px;">
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px "><span class="pingspan"></span>发表评价就有机会获得买豆</li>
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px "><span class="pingspan"></span>发表评价就有机会获得买豆</li>
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px"><span class="pingspan"></span>发表评价就有机会获得买豆</li>
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px"> <span class="pingspan"></span>发表评价就有机会获得买豆</li>
									</ul>
								</div>
								<div style="width: 100%;    display: inline-block; margin-top: 20px;">
									<h3 style="font-size: 14px;color: #333333;width: 1000px;"><span style="float: left;background-color: #F2873B;height: 15px;width: 4px;margin-top: 10px;margin-right: 10px;"></span>评价统计表</h3>
									<p style="width: 99%;font-size: 14px;color: #333333;margin-top: 20px; margin-left: 30px; font-weight: bold;">买家积累信用:<font style="color: #007AFF;">&nbsp;&nbsp;30</font><img src="/static/Home/UserInfo/img/图层-38-拷贝.png" style="margin-left:5px;"><img src="/static/Home/UserInfo/img/图层-38-拷贝.png"><span style="margin-left: 630px;">好评率:<font style="color: #F37B1D;">&nbsp;&nbsp;100.00%</font></span></p>
									<table class="sui-table table-bordered" style="margin-left: 30px; width: 900px;">
									  <thead>
									    <tr>
									      <th style="width: 80px;"></th>
									      <th style="width: 80px;padding: 15px;">最近一周</th>
									      <th style="width: 80px;padding: 15px">最近1个月</th>
									      <th style="width: 80px;padding: 15px">6个月前</th>
									      <th style="width: 80px;padding: 15px">最近6个月</th>
									      <th style="width: 80px;padding: 15px">总计</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td><img src="/static/Home/UserInfo/img/好评.png"> 好评</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									       <td style="color: #007AFF;">0</td>
									        <td style="color: #007AFF;">0</td>
									    </tr>
									    <tr>
									      <td><img src="/static/Home/UserInfo/img/中评.png"> 中评</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									       <td style="color: #007AFF;">0</td>
									        <td style="color: #007AFF;">0</td>
									    </tr>
									    <tr>
									      <td><img src="/static/Home/UserInfo/img/差评.png"> 差评</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									       <td style="color: #007AFF;">0</td>
									        <td style="color: #007AFF;">0</td>
									    </tr>
									    <tr>
									      <td> 总计</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									      <td style="color: #007AFF;">0</td>
									       <td style="color: #007AFF;">0</td>
									        <td style="color: #007AFF;">0</td>
									    </tr>
									  </tbody>
									</table>
								</div>
								<ul class="sui-nav nav-tabs">
								  
								  <li class="active"><a href="#profile" data-toggle="tab">全部的评价</a></li>
							
								</ul>
							    
								<div style="width: 100%;border-top: 1px #ccc solid;margin-top: 21px;"></div>
								<div class="tab-content" style="margin-top: 30px;">
								  <div id="index" class="tab-pane ">
								  </div>
								  <div id="profile" class="tab-pane active">


								  	<div margin-top:="" 20px;display:="" inline-block;border-top:="" 1px="" #ccc="" solid;padding-top:="" 30px;="">
								  	<div style="float: left;margin-left: 77px;"> 
								  		<img src="/static/Home/UserInfo/img/好评.png">
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<p style="    word-break: break-word;   width: 300px;font-size: 12px;">很好的买家,推荐的尺码正合适,推荐的尺码的时候问了好多详细的问题,很负责</p>
								  	  <p>[2016-07-10 19:00:00]</p>
								  	  <p id="pimg"><img src="/static/Home/UserInfo/img/好评.png" alt=""></p>
								  	  <p style="display:none;"><img src="/static/Home/UserInfo/img/好评.png" alt="" width="200" height="200"></p>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span>卖家:<a><font style="color:#0f42b2">依山小屋2016</font></a></span>
								  	</div>
								  	
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span><a><font style="color:#0f42b2">性感黑色小高领修身T恤..</font></a></span>
								  		<p><font style="color:#f37b1d;">128</font><font style="color:#333333;">元</font></p>
								  	</div>
								  	
								  	<div style="float: left;margin-left: 77px;"> 
								  		<button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
								  	</div>
								  	
								  	</div>
								  	
								 		
								  </div>
								 
								</div>
							
						</div>
						<script src="/static/Home/jquery-1.7.2.min.js"></script>
						<script>
						$('#pimg').toggle(function(){
								$(this).next('p').show();
							},function(){
								$(this).next('p').hide();	
							})
						</script>
@endsection
@section('title','我的评价')