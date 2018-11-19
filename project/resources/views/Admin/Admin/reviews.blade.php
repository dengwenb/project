@extends('js')
@section('content')
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span>用户评论 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

	
	
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">编号</th>
					<th width="60">标题</th>
					<th width="50">评分</th>
					<th>内容</th>
					<th>图片</th>
					<th width="60">商品id</th>
					<th width="50">评论时间</th>
					<th width="50">修改时间</th>
					<th width="50">操作</th>
				</tr>
			</thead>

			<tbody>
				@foreach($data as $val)
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>{{$val->id}}</td>
					<td>{{$val->title}}</td>
					<td>{{$val->score}}</td>
					<td>{{$val->content}}</td>
					<td>{{$val->pic}}</td>
					<td>{{$val->goods_id}}</td>
					<td><a href="javascript:;"></a>{{$val->comment_time}}</td>
					<td class="text-l">{{$val->modify_time}}</td>
					<td class="td-manage">
					<form action="/adminreviews/{{$val->id}}" method="post">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<input type="submit" class="Hui-iconfont" value="&#xe6e2;" onclick="return confirm('确定要删除吗')">
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
@section('title','评论中心')