
<?php $__env->startSection('content'); ?>
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-c">
					<td class="null"><input name="id[]" type="checkbox" value="<?php echo e($row->id); ?>"></td>
					<td class="linkid"><?php echo e($row->id); ?></td>
					<td><?php echo e($row->name); ?></td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td class="text-c"><?php echo e($row->url); ?></td>
					<td class="td-status"><?php if( $row->display ): ?><span class="label label-success radius"> <?php else: ?> <span class="label label-defaunt radius">   <?php endif; ?> <?php echo e($arr[$row->display]); ?></span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,<?php echo e($row->id); ?>,<?php echo e($display[$row->display]); ?>)" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改链接','/adminLink/<?php echo e($row->id); ?>/edit',<?php echo e($row->id); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,<?php echo e($row->id); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','链接管理'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>