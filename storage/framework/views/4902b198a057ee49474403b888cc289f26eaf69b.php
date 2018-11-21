<?php $__env->startSection('content'); ?>
<article class="page-container">
	<form action="/adminBroadcast" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">附件：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text"  id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file"  name="file[]" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="status">
					<option value="0">禁用</option>
					<option value="1">启用</option>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="content" cols="" rows="" class="textarea"  placeholder="轮播图内容...最少输入1个字符" ></textarea>
				<!-- <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p> -->
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		<?php echo e(csrf_field()); ?>

	</form>
</article>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','文章添加'); ?>
<?php echo $__env->make('js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>