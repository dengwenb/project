@extends('js')
@section('content')

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>

				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">用户ID</th>
					<th width="100">订单号</th>
					<th>创建时间</th>
					<th>交易状态</th>
					<th>交易时间</th>
					<th>优惠券</th>
					<th>物流ID</th>
					<th width="150">总价钱</th>
					<th width="150">地址id</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach($data as $val)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value=""></td>
					<td width="10">{{$val->id}}</td>
					<td width="10">{{$val->uid}}</td>
					<td style="display:none;"><a href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')"><img width="210" class="picture-thumb" src="temp/200x150.jpg"></a></td>
					<td class="text-l" style="display:none;"><a class="maincolor" href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')">现代简约 白色 餐厅</a></td>
					<td width="20">{{$val->order_num}}</td>
					<td width="100">{{$val->ctime}}</td>
					<td class="td-status" width="50"><span class="label label-success radius" class="boxx">
					@if($val->static==1)
					代付款
					@elseif($val->static==2)
					已付款(代发货)
					@elseif($val->static==3)
					已发货
					@else
					订单完成
					@endif
					</span></td>
					<td width="100">{{$val->paytime}}</td>
					<td width="80">{{$val->coupon_id}}</td>
					<td width="60">{{$val->posid}}</td>
					<td width="20">{{$val->total}}</td>
					<td class="td-status "><span class="label label-success radius">{{$val->address_id}}</span></td>
					<td class="td-manage">
					@if($val->static==2)
					<a style="text-decoration:none"   title="发货" class="box" href="/adminorders/{{$val->id}}"><i class="Hui-iconfont">&#xe6de;</i></a>
					@elseif($val->static==1)
					<a style="text-decoration:none"   title="代付款" class="box" href="javascript:void(0)"><i class="Hui-iconfont">&#xe6de;</i></a>
					@else($val->static==3)
					<a style="text-decoration:none"   title="发货完成" class="box" href="javascript:void(0)"><i class="Hui-iconfont">&#xe6de;</i></a>
					@endif
					<a style="text-decoration:none" class="ml-5" onClick="picture_edit('订单详情','/adminorderinfo','10001')" href="/adminorderinfo/{{$val->id}}" title="订单详情"><i class="Hui-iconfont">&#xe6df;</i></a> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script>
	// // boxx=$('.boxx').html();
	// $('.box').click(function(){
	// 	boxx=$('.boxx').html();
	// 	// alert('d');
	// 	o=$(this);
	// 	alert(boxx);
	// 	// if(span=='代付款'){
	// 	// 	o.attr('href','javascript:void(0)');
	// 	// }else if(span=='已付款(代发货)'){
	// 	// 	alert(span);
	// 	// 	// o.attr('href','return true');
	// 	// }else{
	// 	// 	o.attr('href','javascript:void(0)');
	// 	// }
	// 	// alert($(this).attr('href'));
	// });
</script>
@endsection
@section('title','订单表')