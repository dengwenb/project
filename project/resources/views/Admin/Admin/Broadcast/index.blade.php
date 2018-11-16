@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th style="display:none"></th>
					<th style="display:none"></th>
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
					<td><a href="javascript:;" onClick="picture_edit('图库放大','/adminBroadcast/{{$row->id}}','10001')"><img width="210" class="picture-thumb" src="{{$row->path}}"></a></td>
					<td>{{$row->content}}</td>
					<td>{{date('Y-m-d h-m-s',$row->add_time)}}</td>
					<td class="td-status">@if( $row->status )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->status]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->status]}})" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminBroadcast/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="orpicture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	{{csrf_field()}}
	{{ method_field('DELETE') }}
	</div>
</div>
<script>
/*轮播图删除*/
function orpicture_del(obj,id){
	var token = $('input[name="_token"]').val();
	var method = $('input[name="_method"]').val();
	var path = $(obj).parents('tr').find('.picture-thumb').attr('src');
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/adminBroadcast/'+id,
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

</script>
@endsection
@section('title','链接管理')