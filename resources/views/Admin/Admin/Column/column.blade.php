@extends('js')
@section('content')
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="50">ID</th>
				<th width="50">栏目名</th>
				<th width="50">pid</th>
				<th width="50">path</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $row)
			<tr class="text-c">
				
				<td class="null"><input type="checkbox" value="1" name=""></td>
				
				<td style="cursor:pointer" class="text-primary">{{$row->id}}</td>
				<td style="text-align:left">{{$row->name}}</td>
				<td >{{$row->pid}}</td>
				<td >{{$row->path}}</td>
				<td style="display:none"></td>
				<td style="display:none"></td>
				<td style="display:none"></td>

				<td class="td-manage"><!-- <a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"> --><!-- <i class="Hui-iconfont">&#xe631;</i></a> --> <!-- <a title="编辑" href="/admincolumn/{{$row->id}}/edit"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> --> <!-- <a style="text-decoration:none" class="ml-5"  href="#" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> --> <a title="删除" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
<script>
$(".del").click(function(){
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	  // alert(id);
	s=$(this).parents("tr");
	//判断所选是否是顶级分类
	if($(this).parents("tr").find("td:nth-child(4)").html()==0){
		alert("顶级分类不能删除");
	}else{
		 $.get("/admincolumndel",{id:id},function(data){
		 	// alert(data);
			if(data.msg==1){
				alert("删除成功");
				s.remove();
			}else{
				alert("删除失败");
			}
		 },'json');
	}
});


</script>
@endsection
@section('title','会员列表')

