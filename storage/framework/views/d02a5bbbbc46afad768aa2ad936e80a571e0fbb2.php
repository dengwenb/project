<?php $__env->startSection('content'); ?>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="40">密码</th>
				<th width="130">权限</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="text-c">
				<td class="null"><input type="checkbox" value="1" name=""></td>
				<td><?php echo e($row->id); ?></td>
				<td style="cursor:pointer" class="text-primary"><?php echo e($row->username); ?></td>
				<td style="display:none">男</td>
				<td style="display:none">13000000000</td>
				<td style="display:none">admin@mail.com</td>
				<td ><?php echo e($row->password); ?></td>
				<td class="td-status"><?php echo e($row->name); ?></td>
				<td class="td-manage"><!-- <a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> --> <a title="编辑" onclick="picture_add('管理员信息','/adminAdminUser/<?php echo e($row->id); ?>/edit')" href="javascript:;"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5 res" title="重置密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	</div>
<script>
//删除管理员
$(".del").click(function(){
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	 // alert(id);
	s=$(this).parents("tr");
	$.get("/adminuserdel",{id:id},function(data){
		if(data.msg==1){
			alert("删除成功");
			s.remove();
		}else{
			alert("删除失败");
		}
	},'json');
});

//重置密码
$(".res").click(function(){
	// alert("1");
	aaa = $(this).parents("tr").find("td:nth-child(7)");
	id=$(this).parents("tr").find("td:nth-child(2)").html();
	 // alert(id);
	$.get("/adminuserres",{id:id},function(data){
		  // alert(data.msg);
		 if(data.msg==1){
		 	aaa.html('$2y$10$xQLPmABz6.12qpbI2VLvlOf90AG57gGJKPqpSpD70H4deDhyFH/RG');
		 	alert("重置成功");
		 }else{
		 	alert("重置失败");
	 	 }
	},'json');
});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','管理员列表'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>