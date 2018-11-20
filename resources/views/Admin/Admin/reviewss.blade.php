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
					<th width="100">标题</th>
					<th width="100">评分</th>
					<th>内容</th>
					<th width="150">图片</th>
					<th width="150">goods_id</th>
					<th width="60">评论时间</th>
					<th width="60">修改时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td>{{$data->id}}</td>
					<td>{{$data->title}}</td>
					<td style="display:none;"><a href="javascript:;" onClick="picture_edit('图库编辑','','10001')"><img width="210" class="picture-thumb" src=""></a></td>
					<td class="text-l" style="display:none;"><a class="maincolor" href="javascript:;" onClick="picture_edit('图库编辑','p','10001')">现代简约 白色 餐厅</a></td>
					<td class="text-c">{{$data->score}}</td>
					<td>{{$data->content}}</td>
					<td>{{$data->pic}}</td>
					<td>{{$data->goods_id}}</td>
					<td>{{$data->comment_time}}</td>
					<td>{{$data->modify_time}}</td>
					<td class="td-status" style="display:none;"><span class="label label-success radius">已发布</span></td>
					<td class="td-manage">
					<a style="text-decoration:none" class="ml-5 " href="javascript:;" title="删除">
					<i class="Hui-iconfont box">&#xe6e2;</i>
					</a>
					</td>
				</tr>
			
			</tbody>
		</table>

	</div>
</div>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script>
	$('.box').click(function(){
		// alert('dsfsf');
		o=$(this);
		id=o.parents('tr').find('td:eq(1)').html();
		s=o.parents('tr');
		$.get('/reviewsajax',{id:id},function(data){
			if(data.msg==1){
				s.remove();
			}else{
				alert('删除失败');
			}
		},'json');
	});
</script>
@endsection
@section('title','订单评论')