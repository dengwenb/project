
<?php $__env->startSection('content'); ?>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>模块名</th>
					<th width="100">模块中文名</th>
					<th width="100">Path</th>
					<th width="210">创建时间</th>
					<th width="210">修改时间</th>
					<th width="60">状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="<?php echo e($row->id); ?>"></td>
					<td><?php echo e($row->id); ?></td>
					<td><?php echo e($row->name); ?></td>
					<td><?php echo e($row->cname); ?></td>
					<td><?php echo e($row->path); ?></td>
					<td><?php echo e(date('Y-m-d H:m:s',$row->add_time)); ?></td>
					<td><?php echo e(date('Y-m-d H:m:s',$row->update_time)); ?></td>
					<td class="td-status"><?php if( $row->status ): ?><span class="label label-success radius"> <?php else: ?> <span class="label label-defaunt radius">   <?php endif; ?> <?php echo e($arr[$row->status]); ?></span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,<?php echo e($row->id); ?>,<?php echo e($display[$row->status]); ?>)" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminModule/<?php echo e($row->id); ?>/edit',<?php echo e($row->id); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,<?php echo e($row->id); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','模块管理'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>