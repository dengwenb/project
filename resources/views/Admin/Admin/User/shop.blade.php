@extends('js')
@section('content')
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">商品名</th>
				<th width="40">商品类别</th>
				<th width="50">状态</th>
				<th width="50">销量</th>
				<th width="50">描述</th>
				<th width="50">生产公司</th>
				<th width="50">套餐</th>
				<th width="50">创建时间</th>
				<th width="50">更新时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $row )
			<tr class="text-c">
				<td class="null"><input type="checkbox" value="1" name=""></td>
				<td style="cursor:pointer" class="text-primary">{{$row->id}}</td>
				<td>{{$row->name}}</td>
				<td >{{$row->cate_id}}</td>
				<td >{{$row->status}}</td>
				<td >{{$row->sales}}</td>
				<td >{{$row->descr}}</td>
				<td >{{$row->company}}</td>
				<td ><a href="" class="btn btn-success">查看套餐<a/></td>
				<td >{{$row->add_time}}</td>
				<td >{{$row->update_time}}</td>
				<td class="td-manage"><!-- <a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> --> <a title="编辑" onclick="picture_add('管理员信息','')" href="javascript:;"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5 " title="重置密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" class="ml-5 " style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
<script>

</script>
@endsection
@section('title','管理员列表')