@extends('js')
@section('content')
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单详情 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
	
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">评价ID</th>
					<th width="100">订单ID</th>
					<th>数量</th>
					<th width="150">单价</th>
					<!-- <th width="150">更新时间</th> -->
					<!-- <th width="60">发布状态</th> -->
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $val)
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td>{{$val->id}}</td>
					<td>{{$val->goods_id}}</td>
					<td style="display:none;"><a href="javascript:;" onClick="picture_edit('图库编辑','','10001')"><img width="210" class="picture-thumb" src=""></a></td>
					<td class="text-l" style="display:none;"><a class="maincolor" href="javascript:;" onClick="picture_edit('图库编辑','p','10001')">现代简约 白色 餐厅</a></td>
					<td class="text-c">{{$val->order_id}}</td>
					<td>{{$val->num}}</td>
					<td>{{$val->price}}</td>
					<td class="td-status" style="display:none;"><span class="label label-success radius">已发布</span></td>
					<td class="td-manage">
					<a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="/adminReviews/{{$val->id}}" title="查看评论">
					<i class="Hui-iconfont">&#xe6df;</i>
					</a>
					<a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'10001')" href="javascript:;" title="删除">
					<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection
@section('title','订单详情')