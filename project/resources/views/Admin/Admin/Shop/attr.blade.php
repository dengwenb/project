@extends('js')
@section('content')
<link rel="stylesheet" href="/static/Admin/public/css/bootstrap.min.css">
<link rel="stylesheet" href="/static/Admin/check/css/bootstrap.css"/>
<link rel="stylesheet" href="/static/Admin/check/Font-Awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="/static/Admin/check/css/build.css"/>
<link rel="stylesheet" type="text/css" href="/static/Admin/check/css/default.css">
<link rel="stylesheet" href="/static/Admin/public/css/bootstrap.min.css">
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<style>
	.lydbor{
		border:2px solid red;
	}
</style>
<script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
<article class="page-container">
	<form action="/adminShopupdate/{{$id}}" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{$id}}">
		<input type="hidden" name="order" value="0">
		<div class="row cl">
			@foreach($data as $row)
			<div class="form-label col-xs-4 col-sm-2 checkaaa">
				  <div class="checkbox checkbox-success">
						<input id="checkbox{{$i}}" class="styled" type="checkbox" name="reslation[]" value="{{$row->id}}" @if ($row->status) checked @endif>
							<label for="checkbox{{$i++}}">商品{{$row->aname}}为{{$row->vname}}</label>
					</div>
				<input type="hidden" value="{{$row->attid}}" name="attid[{{$i-1}}]">
				<input type="hidden" value="{{$row->vid}}" class="viddd" name="vid[{{$i-1}}]" >
			</div>
			@endforeach
		
		</div>
		{{csrf_field()}}
	</form>
	
	<form action="/adminShopupdate/{{$id}}" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data" style="display:none">
		<input type="hidden" name="id" value="{{$id}}">
		<input type="hidden" name="cateid" value="{{$cateid}}">
		<input type="hidden" name="order" value="1">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">自定义当前分类的规格：<span  class="c-red">{{$cates->name}}</span></label>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>属性名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="attrname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>属性值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="valuename">
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" id="zidingyi" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-danger radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
		
		{{csrf_field()}}
	</form>

	<form action="/adminShop" method="post" class="form form-horizontal" id="zidingyi"  style="display:none">
		<input type="hidden" name="id" value="{{$id}}">
		<input type="hidden" name="cateid" value="{{$cateid}}">
		<input type="hidden" name="order" value="1">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">当前类别：<span  class="c-red">{{$cates->name}}</span></label>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>商品类别：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select aa" size="1" name="cate_id">
					<option value="">--请选择--</option>
					<option value="{{$cates->id}}">{{$cates->name}}</option>
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
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<a class="btn btn-danger radius" href="avascript:;" onclick="zidingyi(this)">自定义属性</a>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" id="fenpei" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		
		{{csrf_field()}}
	</form>

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="oclick()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe601;</i> 反选 </a> <a href="javascript:;" onclick="tjattr(this)" class="btn btn-info radius">添加商品规格</a>  </a> <a href="javascript:;" onclick="ondel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 删除选中的属性</a> <button class="btn btn-primary radius"  id="tjbtn" form="form-member-add"><i class="Hui-iconfont" >&#xe600;</i> 分配商品属性</button></span> <span class="r">共有数据：<strong>{{count($data)}}</strong> 条</span> </div>
</article>
<script>
	if($('input[type="checkbox"]').val()==undefined){
			$('#tjbtn').attr('onclick','return false');
		}

	function zidingyi(obj){
		$('form').eq(1).show();
		$('form').last().hide();
	}

	function quxiao(obj){
		$('form').eq(1).hide();
		$('form').first().show();
		$('.styled').removeAttr('disabled');
		obj.hide();
		obj.prev().prev().childrens().show();
	}

	$('#tjbtn').click(function(){
	
		// return false;
	})	

	function oclick(obj){
		$('.styled').each(function(){
				$(this).click();	
		})
	}
	function ondel(obj){
		var num = $('.r>strong').html();
		var id = '';
		var input = $(':checked');
		$(':checked').each(function(){	
				id = id+$(this).val()+',';
		});
			id=id.slice(0,-1);
			$.get("/adminShopadel",{id:id},function(data){
			if(data.result==1){
				// that.html(data.questatus);
				// var html = data.questatus=='启用'?'不可查看':'< a href="">可查看</ a>';
				// that.next().html(html);
				input.each(function(){
					num--;
					$(this).parents('.checkaaa').remove();
				}) 
				$('.r>strong').html(num);
				layer.msg(data.msg,{icon: 1,time:1000});
			}else{
				layer.msg(data.msg,{icon: 0,time:1000});
			}
		},'json');
	}

	function tjattr(obj){
		if($(obj).html()=='添加商品规格'){
			$('.styled').attr('disabled','true');
			$(obj).siblings().hide();
			$(obj).html('取消');
			$('form').last().show();
		}else{
			$('.styled').removeAttr('disabled');
			$(obj).siblings().show();
			$(obj).html('添加商品规格');
			$('form').last().hide();
			$('form').eq(1).hide();
		}	
	}
</script>		
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
		$('input[class="viddd"]').each(function(){
		    if($(this).val()==tjthis.prev().find('.cc').val()){
		    	status = 1;
				return;
		    }
		})
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

	$('#fenpei').click(function(){
		
		
		$('input[class="viddd"]').each(function(){
		    if($(this).val()==$('#tj').prev().find('.cc').val()){
		    	status = 1;
				return;
		    }
		    if($('#tj').prev().find('.cc').val()==null){
		    	status = 1;
				return;
		    }
		})
		if(status==1){
			$('#tj').parents('div').find('span.select-box').addClass('lydbor');
			layer.msg('属性值不能重复或者上面选框不能为空',{icon:0,time:1000});
			return false;
		}
	});

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
@endsection
@section('title','规格详情')