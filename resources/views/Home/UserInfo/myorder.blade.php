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

							<div>
							@foreach ($data as $key=>$value)
								<div style="margin-top: 30px;width: 100%;height: 250px;border: 1px #addff8 solid;" >
								
								<div style="width: 100%;height: 50px;background-color: #eaf9ff;vertical-align: middle;font-size: 12px;">
								<input type="checkbox" style="line-height: 50px;margin-left: 20px;">
								<span style="line-height: 50px;">{{date('Y-m-d H:i:s',$value->ctime)}}</span>
								<span style="line-height: 50px;margin-left: 20px;">订单号：{{$value->order_num}}</span>
								<span style="line-height: 50px;margin-left: 100px;">如熙旗舰店</span>
								<img src="/static/Home/UserInfo/img/speech-bubble-3-拷贝.png" style="margin-left: 100px;"> <span>和我联系</span>
								 </div>	
								 <div style="float: left;width: 65%;height: 93px;">
								 	<div style="width: 100%;">
								 	<img src="{{$value->path}}" style="height: 100px;float: left;">
								 	<dl style="width: 220px;float: left;margin-left: 20px;margin-top: 20px;">{{$value->dname}}</dl>
								    <!-- <del style="display: inline-block;margin-left: -38px;margin-top: 20px;color: #858585;">199.00</del> -->
								    <dl style="float: left;margin-left: 50px;margin-top: 40px;">{{$value->price}}</dl>
								    <span style="margin-left: 40px;">{{$value->num}}</span>
								    <dl style="float: right;margin-right: 50px;margin-top: 20px;">退款/退货
								    <br>投诉卖家
								    <br>
								    退运保险
								    </dl>
								    </div>
							
								    
								    
								 </div>	
								 
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center;">
								 	
								 	<span style="font-weight: bold;margin-top: 30px;display: block;">{{$value->total}}</span>
								 	<dl>(含运费:00)</dl>
								 	
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								 	<dl style="margin-top: 30px;">{{$state[$key]}}</dl>
								 	<dl><a href="/myorderinfo/{{$value->order_num}}">订单详情</a></dl>
								 	<dl>查看物流</dl>
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								<spam style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;@if ($value->state > 2)	display:none;@endif"   ><a href="/myorderqx?orderid={{$value->oid}}">取消订单</a></span>
								<button style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;@if ($value->state != 2)	display:none;@endif"   >确认收货</button>
								<button style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;@if ( $value->state < 2 &&  $value->state >5)	display:none;@endif"   >去评论吧</button>
								<button style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;@if ($value->state != 5)	display:none;@endif"   >重新购买吗</button>

								
								
								
								 	
							
								
								 </div>

								 </div>
								 @endforeach 
							</div>	 
							<script>

							</script> 
								 
								 
								 
								
								 
								 
							
				
                        
					
@endsection
@section('title','我的订单')