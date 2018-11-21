@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th width="120">商品名称</th>
					<th>商品属性</th>
					<th style="display:none"></th>
					<th width="210">价格</th>
					<th width="210">库存</th>
					<th width="75">销量</th>
					<th width="60">状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $key=>$row)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="{{$row->id}}"></td>
					<td>{{$row->id}}</td>
					<td>{{$row->sname}}</td>
					<td><u style="cursor:pointer" class="text-primary" onclick="member_show('库存详情','/adminSku/{{$row->id}}','10001','360','400')">{{join(',',$newarr[$key])}}</u></td>
					<td style="display:none"></td>
					<td>{{$row->price}}</td>
					<td>{{$row->stock}}</td>
					<td>{{$row->sales}}</td>
					<td>@if($row->stock > 25) <span class="label label-success radius">充足</span> @elseif ($row->stock > 0 ) <span class="label label-info radius">紧缺</span> @else <span class="label label-danger radius">断货</span> @endif</td>
					<td class="td-manage" id="lupdate"> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminSku/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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