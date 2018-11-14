@extends('js')
@section('content')
@if (session('error'))
@else

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
@endif
<form action="/admincate" method="get">
<div class="page-container">
	<div class="text-c"> 搜索：		
		<input type="text" class="input-text" style="width:250px" placeholder="输入商品名关键字" id="" name="keywords" value="{{$request['keywords'] or ''}}">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
	</div>
</form>

<input type="hidden" value="{{session('success')}}" id="test111">
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加图片','/admincate/create')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a></span> <span class="r">共有数据：<strong>{{count($res)}}</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value="">全选</th>
				<th width="10%">ID</th>
				<th width="15%">商品名</th>
				<th width="20%">添加时间</th>
				<th width="10%">pid</th>
				<th width="10%">状态</th>
				<th width="20%">操作</th>
			</tr>
			</thead>
			<tbody>
			@foreach($res as $key=>$value)

				<tr class="text-c">
					<td><input type="checkbox" value="{{$value->id}}" name=""></td>
					<td>{{$value->id}}</td>
					<td><u style="cursor:pointer;float:left" class="text-primary" >{{$value->name}}</u></td>
					<td>{{$value->addtime}}</td>
					<!-- <td class="text-l">{{$cate[$key]->name}}</td> -->
					
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
			url: '/admincatedel',
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
			url: '/admincatestop',
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
@section('title','商品管理')