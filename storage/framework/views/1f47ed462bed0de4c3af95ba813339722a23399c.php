
<?php $__env->startSection('content'); ?>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th width="80">标题</th>

					<th width="80">图片</th>

					<th style="display:none"></th>

					<th width="80">来源</th>
					<th width="120">更新时间</th>
					<th width="75">浏览次数</th>
					<th width="60">发布状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-c">
					<td class="null"><input type="checkbox" value="" name=""></td>
					<td><?php echo e($row->id); ?></td>
					<td><u style="cursor:pointer" class="text-primary" onclick="member_show('文章详情','/adminArticle/<?php echo e($row->id); ?>','10001','360','400')"><?php echo e($row->title); ?></u></td>

					<td ><img src="<?php echo e($row->path); ?>" width="100px" height="100px"></td>

					<td style="display:none"></td>

					<td><?php echo e($row->source); ?></td>
					<td><?php echo e(date('Y-m-d',$row->update_time)); ?></td>
					<td><?php echo e($row->num); ?></td>
					<td class="td-status"><span class="label label-success radius"><?php echo e($arr[$row->status]); ?></span></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_shenhe(this,'10001')" href="javascript:;" title="审核">审核</a> <a style="text-decoration:none" class="ml-5" onClick="article_edit('文章编辑','/adminArticle/<?php echo e($row->id); ?>/edit',<?php echo e($row->id); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="article_del(this,<?php echo e($row->id); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>

	</div>
</div>
<script>
/*文章-查看*/
function member_show(title,url,id,w,h)
{
	layer_show(title,url,w,h);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
//删除
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminArticledel',
			data:{id:id},
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
<?php $__env->startSection('title','文章管理'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>