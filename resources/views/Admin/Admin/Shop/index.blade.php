@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th width="100">分类</th>
					<th width="250">商品主图</th>
					<th>商品名</th>
					<th width="100">生产厂家</th>
					<th width="150">商品描述</th>
					<th width="150">修改时间</th>
					<th width="80">商品规格</th>
					<th width="80">库存管理</th>
					<th width="60">状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="{{$row->id}}"></td>
					<td>{{$row->id}}</td>
					<td>{{$row->cname}}</td>
					<td><a href="javascript:;" onClick="picture_edit('图库编辑','/adminShop/{{$row->id}}','10001')"><img width="210" class="picture-thumb" src="{{$row->path}}"></a></td>
					<td>{{$row->name}}</td>
					<td>{{$row->company}}</td>
					<td>{{$row->descr}}</td>
					<td>{{date('Y-m-d H:m:s',$row->update_time)}}</td>
					<td class="text-c"><a class="maincolor" href="javascript:;" onClick="picture_add('商品规格编辑','/adminShopattr/{{$row->id}}/{{$row->cate_id}}')">规格详情</a></td>
					<td class="text-c"><a class="maincolor" href="/adminSku?sid={{$row->id}}">库存管理</a></td>
					<td class="td-status">@if( $row->status )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->status]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->status]}})" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminShop/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{csrf_field()}}
	{{ method_field('DELETE') }}
	</div>
</div>
@endsection
@section('title','文章管理')