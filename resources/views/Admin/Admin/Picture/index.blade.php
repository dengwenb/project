@extends('js')
@section('content')
@if (session('success'))
@else
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 轮播图管理 <span class="c-gray en">&gt;</span> 轮播图列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
@endif

<input type="hidden" value="{{session('success')}}" id="test111">
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="allclick()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe601;</i> 全选或全不选 </a> <a href="javascript:;" onclick="orderclick()" class="btn btn-secondary-outline radius"><i class="Hui-iconfont">&#xe608;</i> 反选 </a>  <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加轮播图信息','/admincast/create')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加轮播图信息</a></span> <span class="r">共有数据：<strong>{{count($data)}}</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">图片</th>
					<th>相关内容</th>
					<th width="150">添加时间</th>
					<th width="60">状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="{{$row->id}}"></td>
					<td>{{$row->id}}</td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td><a href="javascript:;" onClick="picture_edit('图库放大','/admincast/{{$row->id}}','10001')"><img width="210" class="picture-thumb" src="{{$row->path}}"></a></td>
					<td>{{$row->content}}</td>
					<td>{{date('Y-m-d h-m-s',$row->add_time)}}</td>
					<td class="td-status">@if( $row->status )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->status]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->status]}})" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/admincast/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	{{csrf_field()}}
	{{ method_field('DELETE') }}
	</div>
</div>
<script>
//点击tr触发点击
$('tbody .text-c td').not('.null').click(function(){
		$(this).parent().find('input[type="checkbox"]').click();
})

//反选
function orderclick(){
	$('tr[class="text-c"]>td>input').each(function(){	
		   $(this).click();	
	})
}
	/*轮播图删除*/
function picture_del(obj,id){
	var token = $('input[name="_token"]').val();
	var method = $('input[name="_method"]').val();
	var path = $(obj).parents('tr').find('.picture-thumb').attr('src');
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/admincast/'+id,
			data: {id:id,'_token':token,'_method':method,path:path},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					$(obj).parents("tr").remove();
					layer.msg(data.msg,{icon:1,time:1000});
				}else{
					layer.msg(data.msg,{icon:0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*图片-是否显示*/
function link_display(obj,id,display){
			$.ajax({
			type: 'GET',
			url: '/admincastunder',
			data: {id:id,display:display},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="link_display(this,'+id+','+data.display+')" href="javascript:;"><i class="Hui-iconfont">&#xe603;</i></a>');
					if(data.display==0){
						$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">'+'启用'+'</span>');
					}else{
						$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">'+'禁用'+'</span>');
					}
					$(obj).remove();
					layer.msg(data.msg,{icon: 6,time:1000});
				}else{
						layer.msg('操作失败!,请不要频繁操作',{icon: 0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
}

// //全选 反选
function allclick()
{
	$('thead input[type="checkbox"]').click();
}


//批量删除
function datadel()
{
	id='';
	var check = $('tr[class="text-c"]>td>input:checked');
	$('tr[class="text-c"]>td>input:checked').each(function(){
		id=id+($(this).parent().next().html())+',';
	})
		id=id.slice(0,-1);
		$.ajax({
			type: 'GET',
			url: '/admincastdelall',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					check.parents('tr').remove();
					layer.msg(data.msg,{icon: 1,time:1000});
				}else{
					layer.msg(data.msg,{icon: 0,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	
	// $(obj).parents("tr").find(".linkid").html();
}

</script>
@endsection
@section('title','链接管理')