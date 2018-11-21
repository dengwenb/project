
<?php $__env->startSection('content'); ?>
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
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="<?php echo e($row->id); ?>"></td>
					<td><?php echo e($row->id); ?></td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td><a href="javascript:;" onClick="picture_edit('图库放大','/adminBroadcast/<?php echo e($row->id); ?>','10001')"><img width="210" class="picture-thumb" src="<?php echo e($row->path); ?>"></a></td>
					<td><?php echo e($row->content); ?></td>
					<td><?php echo e(date('Y-m-d h-m-s',$row->add_time)); ?></td>
					<td class="td-status"><?php if( $row->status ): ?><span class="label label-success radius"> <?php else: ?> <span class="label label-defaunt radius">   <?php endif; ?> <?php echo e($arr[$row->status]); ?></span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,<?php echo e($row->id); ?>,<?php echo e($display[$row->status]); ?>)" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminBroadcast/<?php echo e($row->id); ?>/edit',<?php echo e($row->id); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="orpicture_del(this,<?php echo e($row->id); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','链接管理'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>