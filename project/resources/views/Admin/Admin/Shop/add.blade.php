@extends('js')
@section('content')
<style>
	.lydbor{
		border:2px solid red;
	}
</style>
<script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
<article class="page-container">
	<form action="/adminShop" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名字：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>生产厂家：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="company">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品图片：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text"  id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file"  name="file[]" class="input-file" multiple>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>商品类别：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select aa" size="1" name="cate_id">
					<option value="">--请选择--</option>
					@foreach($data as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>商品属性<span class="num">1</span>：</label>
			<div class="formControls col-xs-3 col-sm-3"> <span class="select-box">
				<select class="select bb" size="1" name="attr[]" id="attr">
				</select>
				</span> 
			</div>

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span class="num">商品属性值：</label>
			<div class="formControls col-xs-3 col-sm-3"> <span class="select-box">
				<select class="select cc" size="1" name="value[]" id="attrvalue">
				</select>
				</span> 
			</div>
			<a class="btn btn-success" id="tj" style="display:none"><i class="Hui-iconfont">&#xe600;</i></a>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select dd" size="1" name="status">
					<option value="0">禁用</option>
					<option value="1">启用</option>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="descr" cols="" rows="" class="textarea"  placeholder="商品描述...最少输入1个字符" ></textarea>
				<!-- <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p> -->
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		{{csrf_field()}}
	</form>
</article>
</body>
<script>
	i=1;
	function opp(){
		op=$('<option class="mm">--请选择--</option>');
		$('select').not('.aa').not('.dd').append(op);
		$('.mm').attr('disabled','true');
	}
	opp();
	$('#tj').live('click',function(){
		tjthis = $(this);
		var arr = new Array();
		$(this).parents('form').find('.cc').each(function(){	
			if($.inArray($(this).val(), arr)!=-1){
				status = 1;
				return;
			}else{
				arr.push($(this).val());
				status = 0;
				tjthis.parents('div').find('span.select-box').removeClass('lydbor');
			}
		});
		if(status==1){
			$(this).parents('div').find('span.select-box').addClass('lydbor');
			
			return false;
		}
		var aaa = $(this).parents().html();
		$(this).css('display','none');
		$(this).prev().after('<a class="btn btn-danger" id="del"><i class="Hui-iconfont">&#xe6a1;</i></a>');
		$(this).parents('div').after('<div class="row cl">'+aaa+'</div>');
		i++;
		$(this).parents('div').next().find('span.num').html(i);
		$(this).parents('div.row').next().find('#tj').hide();
		if(i==2){
			$(this).parents('div.row').next().find('#attr').prepend('<option class="xxx" selected>--请选择--</option>');
		}
		$(this).parents('div.row').next().find('#attr>option[class="setshop mm"]').remove();
		$(this).parents('div.row').next().find('#attrvalue').html('<option class="mm">--请选择--</option>');
	})

	$('#del').live('click',function(){
		$(this).parents('div').nextAll().find('span.num').each(function(){
			var num = $(this).parents('div').nextAll().find('span.num').length;
			i=parseInt($(this).html()-1);
			$(this).html(i);
		});
		$(this).parent().remove();
	})

	$('select.aa').live('change',function(){
		var selectval = $(this).parents('div.row').next().find('select.bb');	
		var id = $(this).val();
			$.ajax({
					type: 'GET',
					url: '/adminShopgetattr',
					data: {id:id},
					dataType: 'json',
					success: function(data){
						var op = $('<option class="setshop mm" >--请选择--</option>');
						selectval.html('');
						selectval.append(op);
						// selectval.parents('div').next().next().find('select').html('<option class="setshop mm" >--请选择--</option>');
						newdata = data.msg;
					    for(var i =0;i<newdata.length;i++){
								var info = $('<option value="'+newdata[i].id+'">'+newdata[i].name+'</option>');	
								selectval.append(info);		
							}
						// $('.mm').attr('disabled','true');		
						
					},
					error:function(data) {
						console.log(data.msg);
					},
				});	

		 $(this).parents('div').next().find('select');

	})

	$('select.bb').live('change',function(){
		var selectattr = $(this).parents('div.formControls').next().next().find('select');		
		var id = $(this).val();
			$.ajax({
					type: 'GET',
					url: '/adminShopgetvalue',
					data: {id:id},
					dataType: 'json',
					success: function(data){
						var op = $('<option class="mm" >--请选择--</option>');
						selectattr.html('');
						selectattr.append(op);
						newdata = data.msg;
					    for(var i =0;i<newdata.length;i++){
								var info = $('<option value="'+newdata[i].id+'">'+newdata[i].name+'</option>');	
								selectattr.append(info);		
							}
						$('.mm').attr('disabled','true');
						$('.xxx').attr('disabled','true');
						status=0;		
					},
					error:function(data) {
						console.log(data.msg);
					},
				});	

		 $(this).parents('div').next().find('select');

	})

	$('select.cc').live('change',function(){
		$(this).parent().parent().next().show();
	})


</script>
</html>
@endsection
@section('title','添加商品')