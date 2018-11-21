<?php $__env->startSection('content'); ?>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="130">权限</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="text-c">
				
				<td class="null"><input type="checkbox" value="1" name="" class="check"></td>
				
				<td style="cursor:pointer" class="text-primary"><?php echo e($row->id); ?></td>
				<td style="display:none"></td>
				<td style="display:none"></td>
				<td style="display:none"></td>
				<td style="display:none"></td>
				<td ><?php echo e($row->username); ?></td>
				<td ><?php echo e($row->name); ?></td>
				<td class="td-manage"><!-- <a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> --> <a title="分配权限" href="/list/<?php echo e($row->id); ?>"  class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <!-- <a style="text-decoration:none" class="ml-5"  href="#" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> --> <!-- <a title="删除" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td> -->
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	</div>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','会员列表'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>