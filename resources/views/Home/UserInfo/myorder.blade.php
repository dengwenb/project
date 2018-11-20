@extends('Home.Public.userinfopublic')
@section('content')

						      <ul class="sui-nav nav-tabs" style="margin-top:0px;width: 1000px;margin-left: 30px;">
								  <li style="margin-left: -5px;"><a href="#profile" data-toggle="tab">所有订单<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								  <li class="active"><a href="#profile" data-toggle="tab">待付款<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								   <li class="active"><a href="#profile" data-toggle="tab">待发货<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								    <li class="active"><a href="#profile" data-toggle="tab">待发货1<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								    <li class="active"><a href="#profile" data-toggle="tab">待评价<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
							</ul>
							<div class="profile-info">
								<div class="control-group clearfix " style="width: 1020px;margin-bottom: 0px;">
									<div style="margin-top: -60px" ;="">
                                        <div style="float:right;display: inline;margin-left:60px;display: inline-block;height: 25px;margin-right: -5px;padding-top: 10px;"> 
									    <img src="/static/Home/UserInfo/img/trash-拷贝.png" style="height: 10px;width: 10px;">
									           <font style="">订单回收站</font>
                                        </div> 
									 </div>
									
								</div>
							</div>
							<div style="margin-left: 30px;height: 25px;">
								<input type="text" placeholder="输入商品标题或者订单号进行搜索 " style="width: 200px;height: 25px;font-size: 12px;">
								<button style="height: 100%;margin-left: -5px;border: 1px #ccc solid;font-size: 12px;color:#353535;background-color: #f2f2f2;width: 100px;">订单搜索</button>
							    <span style="margin-left: 5px;">更多搜索条件</span>
							</div>
							
							<div class="tab-content" style="width: 1000px;margin-top: 10px;border:1px #fff solid; border-top:transparent;margin-left: 30px;">
								  <div id="index" class="tab-pane " style="padding: 40px 30px;">
								  </div>
								 <div id="profile" class="tab-pane active" style="padding: 00px 00px;">
								 <div style="width: 100%;height: 50px;border: 1px #ccc solid;line-height: 50px;background-color: #fdfdfd">
								 	<span style="color: #858585;margin-left: 160px;">宝贝</span>
								 	<span style="color: #858585;margin-left: 190px;">单价(元)</span>
								 	<span style="color: #858585;margin-left: 29px;">数量</span>
								 	<span style="color: #858585;margin-left: 45px;">商品操作</span>
								 	<span style="color: #858585;margin-left: 100px;">实付款(元)</span>
								 	<span style="color: #858585;margin-left: 45px;">交易状态</span>
								 	<span style="color: #858585;margin-left: 45px;">交易操作</span>
								 </div>
								 <div style="width: 100%;height: 0px;padding: 10px;">
								 	<span style="line-height: 20px;">全选</span>
								 	<input type="button" value="批量确认收货" style="padding: 2px;border: 1px #ccc solid;background-color: #fff;color: #ccc;margin-left: 20px;">
								    <div style="float: right;margin-right: 5px;">
								    	<input type="button" style="display: inline-block;background-color: #fff; background-image: url(img/我的订单/组-39.png);width: 20px;height: 20px;border: 0px;background-repeat: no-repeat;">
								    	<input type="button" style="border:0px;display: inline-block;background-color: #fff;background-image: url(img/我的订单/组-40.png);background-repeat: no-repeat;width: 58px;height: 20px;">
								    </div>
								 </div>
							<div style="display:none;">
								<div style="margin-top: 30px;width: 100%;height: 250px;border: 1px #addff8 solid;" >
								<div style="width: 100%;height: 50px;background-color: #eaf9ff;vertical-align: middle;font-size: 12px;">
								<input type="checkbox" style="line-height: 50px;margin-left: 20px;">
								<span style="line-height: 50px;">2016-04-02</span>
								<span style="line-height: 50px;margin-left: 20px;">订单号：18000889898989</span>
								<span style="line-height: 50px;margin-left: 100px;">如熙旗舰店</span>
								<img src="/static/Home/UserInfo/img/speech-bubble-3-拷贝.png" style="margin-left: 100px;"> <span>和我联系</span>
								 </div>	
								 <div style="float: left;width: 65%;height: 93px;">
								 	<div style="width: 100%;">
								 	<img src="/static/Home/UserInfo/img/tb1yczdhpxxxxxzxxxxxxxxxxxx_!!2-item_pic.png" style="height: 100px;float: left;">
								 	<dl style="width: 220px;float: left;margin-left: 20px;margin-top: 20px;">如熙2016春季新款韩版春季新款韩版春季新款韩版春季新款韩版春季新款韩版春季新款韩版春季新款韩版春季新款韩版</dl>
								    <del style="display: inline-block;margin-left: -38px;margin-top: 20px;color: #858585;">199.00</del>
								    <dl style="float: left;margin-left: 50px;margin-top: 40px;">129.00</dl>
								    <span style="margin-left: 40px;">1</span>
								    <dl style="float: right;margin-right: 50px;margin-top: 20px;">退款/退货
								    <br>投诉卖家
								    <br>
								    退运保险
								    </dl>
								    </div>
								    <div style="border-top: 1px #addff8 solid;height: 50px;width: 100%;margin-top: 80px;padding-top: 20px;">
								    	<dl style="float: left;margin-left: 20px;">保险服务</dl>
								    	<del style="display: inline-block;margin-left: -40px;margin-top: 0px;color: #858585;">199.00</del>
								    <dl style="float: left;margin-left: 320px;margin-top: 30px;">129.00</dl>
								     <span style="margin-left: 40px;">1</span>
								    </div>
								    
								    
								 </div>	
								 
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center;">
								 	
								 	<span style="font-weight: bold;margin-top: 30px;display: block;">129</span>
								 	<dl>(含运费:00)</dl>
								 	
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								 	<dl style="margin-top: 30px;">卖家已发货</dl>
								 	<dl>订单详情</dl>
								 	<dl>查看物流</dl>
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								 	<dl style="margin-top: 30px;">还有9天10时4分</dl>
								 	<button style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;">确认收货</button>
								 </div>
								 </div>
							</div>	 
								 
								 
								 
								 
								
								 
								 
							
				
                        
					
@endsection
@section('title','我的订单')