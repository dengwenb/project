@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>标题</th>
					<th style="display:none"></th>
					<th width="210">创建时间</th>
					<th width="210">更新时间</th>
					<th width="75">优先级</th>
					<th width="60">状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="{{$row->id}}"></td>
					<td>{{$row->id}}</td>
					<td><u style="cursor:pointer" class="text-primary" onclick="member_show('公告详情','/adminbulletin/{{$row->id}}','10001','360','400')">{{$row->title}}</u></td>
					<td style="display:none"></td>
					<td>{{date('Y-m-d H:m:s',$row->add_time)}}</td>
					<td>{{date('Y-m-d H:m:s',$row->update_time)}}</td>
					<td>@if($dis[$row->priority]='selected') @endif
						<select name="" id="priority" style="width:80px;text-align:center" >
								<option value="0" {{$dis[0]}}>普通</option>
								<option value="1" {{$dis[1]}}>一般</option>
								<option value="2" {{$dis[2]}}>紧急</option>
								<option value="3" {{$dis[3]}}>非常紧急</option>
						</select>
					</td>
					<td class="td-status">@if( $row->status )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->status]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->status]}})" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminBulletin/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	{{csrf_field()}}
	{{ method_field('DELETE') }}
	</div>
</div>
<script>
/*修改状态*/
$('#priority').change(function(){
	var id = $(this).parents('tr').find('td').eq(1).html();
	var priority = $(this).val();
	var tr = $(this);
	layer.confirm('确认修改公告的优先级吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminBulletinedit',
			data:{id:id,priority:priority},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					// tr.parents("tr").find('option[value="'+data.status+'"]').attr('selected','true');
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
})
</script>
@endsection
@section('title','文章管理')