@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover ">
			<thead>
				<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value="">全选</th>
				<th width="10%">ID</th>
				<th width="15%">分类名</th>
				<th width="15%">pid</th>
				<th width="15%">path</th>
				<th width="20%">状态</th>
				<th width="20%">操作</th>
			</tr>
			</thead>
			<tbody>
				@foreach($data as $key=>$value)
			<tr class="text-c">
				<td class="null"><input type="checkbox" value="{{$value->id}}" name=""></td>
				<td>{{$value->id}}</td>
				<td><u style="cursor:pointer;float:left" class="text-primary" >{{$value->name}}</u></td>
				<td>{{$value->pid}}</td>
				<td class="text-l">{{$value->path}}</td>
				<td class="state" >
				    {{$state[$key]}}
				</td>

				<td class="td-manage"><a style="text-decoration:none" onClick="stop(this,{{$value->id}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> 

				<a style="text-decoration:none" class="ml-5" onClick="picture_edit('分类修改','/adminCate/{{$value->id}}','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
				
				<a style="text-decoration:none" class="ml-5" onClick="del(this,{{$value->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>

			</tr>
			@endforeach
			</tbody>
		</table>

	</div>
</div>
<script>
	/*删除*/
function del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminCatedel',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				if(data.msg==1){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}else{
					layer.msg('删除失败!请检查是否有子分类，或者稍后再试。',{icon:0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}


/*下架*/
function stop(obj,id){
	var m;
	
	var n=$(obj).parents("tr").find("td.state").html();

	if (n.search("正常")==-1) {
		m='上架';
	}else{
		m='下架';
	}
	// alert(m);
	layer.confirm('是否'+m+'吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminCatestop',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				// alert(data);
				if(data.msg==1){
					if (data.state==1) {
						$(obj).parents("tr").find("td.state").replaceWith('<td class="state" >已下架</td>');
						layer.msg('已下架!',{icon:1,time:1000});
					}else{
						$(obj).parents("tr").find("td.state").replaceWith('<td class="state" >正常</td>');
						layer.msg('已上架!',{icon:1,time:1000});

					}
				}else{
					layer.msg('下架失败!当前分类下有子分类,不能直接下架,或者稍后再试。',{icon:0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			}
		});		
	});
}
</script>
@endsection
@section('title','分类管理')