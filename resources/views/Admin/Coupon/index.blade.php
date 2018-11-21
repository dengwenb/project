@extends('js')
@section('content')

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value="">全选</th>
				<th >ID</th>
				<th >优惠券名</th>
				<th >使用条件(最低金额)</th>
				<th >优惠金额</th>				
				<th >添加时间</th>
				<th >开始时间</th>
				<th >结束时间</th>
				<th >状态</th>
				<th >优惠商品</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
				@foreach($data as $key=>$value)
			<tr class="text-c">
				<td><input type="checkbox" value="{{$value->id}}" name=""></td>
				<td>{{$value->id}}</td>
				<td><u style="cursor:pointer;float:left" class="text-primary" >{{$value->name}}</u></td>
				<td>{{$value->min_pri}}</td>
				<td class="text-l">{{$value->c_pri}}</td>
				<td class="text-l">{{$value->a_time}}</td>
				<td class="text-l">{{$value->start_time}}</td>
				<td class="text-l">{{$value->stop_time}}</td>
				<td class="state">{{$state[$key]}}</td>
	
				<td class="text-l" >{{$cate[$key][0]->name}}</td>

				<td class="td-manage"><a style="text-decoration:none" onClick="stop(this,{{$value->id}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> 

				<a style="text-decoration:none" class="ml-5" onClick="picture_edit('优惠券修改','/adminCoupon/{{$value->id}}','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
				
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
			url: '/adminCoupondel',
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

	if (n.search("显示")==-1) {
		m='显示';
	}else{
		m='隐藏';
	}
	// alert(m);
	layer.confirm('是否'+m+'吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminCouponstop',
			data: {id:id},
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
@section('title','优惠券管理')