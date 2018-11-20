@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th style="display:none"></th>
					<th style="display:none"></th>
					<th style="display:none"></th>
					<th width="80">ID</th>
					<th width="100">链接名字</th>
					<th width="100">url地址</th>
					<th width="60">是否显示</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach($data as $row)
				<tr class="text-c">
					<td class="null"><input name="id[]" type="checkbox" value="{{$row->id}}"></td>
					<td class="linkid">{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td class="text-c">{{$row->url}}</td>
					<td class="td-status">@if( $row->display )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->display]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->display]}})" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改链接','/adminLink/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			@endforeach
			</tbody>
		</table>

	</div>
</div>
<script>
	/*图片-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminlinkdel',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
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
</script>
@endsection
@section('title','链接管理')