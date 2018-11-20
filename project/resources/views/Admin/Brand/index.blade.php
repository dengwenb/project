@extends('js')
@section('content')

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value="">全选</th>
				<th >ID</th>
				<th >品牌名</th>
				<th >栏目</th>
				<th >log</th>				
				<th >状态</th>
				<th>描述</th>
				<th>详情</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($data as $key=>$value)
			<tr class="text-c">
				<td><input type="checkbox" value="{{$value->bid}}" name=""></td>
				<td>{{$value->bid}}</td>
				<td><u style="cursor:pointer;float:left" class="text-primary" >{{$value->bname}}</u></td>
				<td class="text-l">{{$value->cname}}</td>
				<td><img src="{{$value->log}}" width="150" height="100" alt=""></td>
				<td class="state">{{$state[$key]}}</td>
				<td class="text-1">{{$value->describe}}</td>
				<td class="text-1"><a href="">点击查看详情</a></td>
	
				<td class="td-manage"><a style="text-decoration:none" onClick="stop(this,{{$value->bid}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> 

				<a style="text-decoration:none" class="ml-5" onClick="picture_edit('品牌修改','/adminBrand/{{$value->bid}}','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
				
				<a style="text-decoration:none" class="ml-5" onClick="del(this,{{$value->bid}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>

			</tr>
			@endforeach
			</tbody>
		</table>

	</div>
</div>
<script>
	/*删除*/
function del(obj,bid){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminBranddel',
			data: {bid:bid},
			dataType: 'json',
			success: function(data){
				if(data.msg==1){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}else{
					layer.msg('删除失败!',{icon:0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}


/*下架*/
function stop(obj,bid){
	var m;
	
	var n=$(obj).parents("tr").find("td.state").html();

	if (n.search("显示")==-1) {
		m='显示';
	}else{
		m='隐藏';
	}
	// alert(m);
	layer.confirm('是否'+m+'吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminBrandstop',
			data: {bid:bid},
			dataType: 'json',
			success: function(data){
				// alert(data);
				if(data.msg==1){
					if (data.state==1) {
						$(obj).parents("tr").find("td.state").replaceWith('<td class="state" >显示</td>');
						layer.msg('已显示!',{icon:1,time:1000});
					}else{
						$(obj).parents("tr").find("td.state").replaceWith('<td class="state" >隐藏</td>');
						layer.msg('已隐藏!',{icon:1,time:1000});

					}
				}else{
					layer.msg('下架失败!',{icon:0,time:1000});
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
@section('title','物流管理')