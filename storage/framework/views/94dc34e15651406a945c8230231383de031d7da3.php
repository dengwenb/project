
<?php $__env->startSection('content'); ?>
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
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="<?php echo e($row->id); ?>"></td>
					<td><?php echo e($row->id); ?></td>
					<td><u style="cursor:pointer" class="text-primary" onclick="member_show('公告详情','/adminbulletin/<?php echo e($row->id); ?>','10001','360','400')"><?php echo e($row->title); ?></u></td>
					<td style="display:none"></td>
					<td><?php echo e(date('Y-m-d H:m:s',$row->add_time)); ?></td>
					<td><?php echo e(date('Y-m-d H:m:s',$row->update_time)); ?></td>
					<td><?php if($dis[$row->priority]='selected'): ?> <?php endif; ?>
						<select name="" id="priority" style="width:80px;text-align:center" >
								<option value="0" <?php echo e($dis[0]); ?>>普通</option>
								<option value="1" <?php echo e($dis[1]); ?>>一般</option>
								<option value="2" <?php echo e($dis[2]); ?>>紧急</option>
								<option value="3" <?php echo e($dis[3]); ?>>非常紧急</option>
						</select>
					</td>
					<td class="td-status"><?php if( $row->status ): ?><span class="label label-success radius"> <?php else: ?> <span class="label label-defaunt radius">   <?php endif; ?> <?php echo e($arr[$row->status]); ?></span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,<?php echo e($row->id); ?>,<?php echo e($display[$row->status]); ?>)" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminBulletin/<?php echo e($row->id); ?>/edit',<?php echo e($row->id); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,<?php echo e($row->id); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','文章管理'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>