@extends('js')
@section('content')

	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="50">ID</th>
				<th width="50">用户名</th>
				<th width="130">密码</th>
				<th width="80">电话</th>
				<th width="80">地址</th>
				<th width="80">邮箱</th>
				<th width="50">用户等级</th>
				<th width="40">用户状态</th>
				<th width="70">密保状态</th>
				<th width="70">查看密保</th>
				<th width="130">创建时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $row)
			@foreach($infos as $rows)
				@foreach($user as $rowss)
			<tr class="text-c">
				
				<td class="null"><input type="checkbox" value="1" name=""></td>
				
				<td style="cursor:pointer" class="text-primary">{{$row->id}}</td>
				<td >{{$row->username}}</td>
				<td >{{$row->password}}</td>
				<td >{{$row->phone}}</td>
				<td ><a class="btn btn-success" onclick="picture_add('查看地址','/adminvipaddress/{{$row->id}}')" href="javascript:;" >查看地址</a></td>
				<td >{{$row->email}}</td>
				<td >{{$row->rolename}}</td>
				<td class="sta"> {{$rows->status}} </td>
				<td class="que"> {{$rowss->questatus}}</td>
				<td >@if($rowss->questatus=='启用') 不可查看 @else <a class="btn btn-success" onclick="picture_add('密保','/adminvipques/{{$row->id}}')" href="javascript:;">可查看</a> @endif</td>
				<td >{{$row->add_time}}</td>
				<td class="td-manage"><!-- <a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> --> <a title="编辑" onclick="picture_add('会员信息','/adminAdminVip/{{$row->id}}/edit')" href="javascript:;" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5 res" title="重置密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			@endforeach
			@endforeach
			@endforeach
		</tbody>
	</table>
	</div>
</div>
<script>
//用户状态修改
$(".sta").click(function(){
	// alert("1");
	// 获取status所在td
	sta=$(this);
	// alert(sta);
	//获取ID
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	//获取status值
	status=$(this).html();
	  // alert(status);
	  // 操作ajax传递数据
	$.get("/adminvipsta",{id:id,status:status},function(data){
		// alert(data);
		if(data.msg==1){
			// alert("修改成功");
			 // alert(data.status);
			// 修改status所在td的状态
			sta.html(data.status);
		}else{
			alert("修改失败");
		}
	},'json');
});

// 密保状态修改
$(".que").click(function(){
	//获取密保所在td
	that=$(this);
	//获取id
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	//获取状态值
	questatus=$(this).html();
	 // alert(questatus);
	 // 操作ajax传递数据
	 
	$.get("/adminvipque",{id:id,questatus:questatus},function(data){
		 // alert(data.msg);
		if(data.msg==1){
			// alert(data.questatus);
			// 修改状态值
			that.html(data.questatus);
			var html = data.questatus=='启用'?'不可查看':'<a href="" class="btn btn-success">可查看</a>';
			that.next().html(html);
		}else{
			alert("修改失败");
		}
	},'json');
});
//会员重置密码 123
$(".res").click(function(){
	//获取id
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	// alert(id);
	$.get("/adminvipres",{id:id},function(data){
		// alert(data.msg);
		if(data.msg==1){
			alert("重置成功");
			
		}else{
			alert("重置失败");
		}
	},'json');
});

</script>
@endsection
@section('title','会员列表')

