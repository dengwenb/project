@extends('js')
@section('content')
<link rel="stylesheet" href="/static/Admin/public/css/bootstrap.min.css">
<link rel="stylesheet" href="/static/Admin/check/css/bootstrap.css"/>
<link rel="stylesheet" href="/static/Admin/check/Font-Awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="/static/Admin/check/css/build.css"/>
<link rel="stylesheet" type="text/css" href="/static/Admin/check/css/default.css">
<link rel="stylesheet" href="/static/Admin/public/css/bootstrap.min.css">
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
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
				
			</div>
			@endforeach
		
		</div>
		{{csrf_field()}}
	</form>

	<form action="/adminShopupdate/{{$id}}" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data" style="display:none">
		<input type="hidden" name="id" value="{{$id}}">
		<input type="hidden" name="order" value="1">
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
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-danger radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
		{{csrf_field()}}
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="oclick()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe601;</i> 反选 </a> <a href="javascript:;" onclick="tjattr(this)" class="btn btn-info radius">添加商品规格</a>  </a> <a href="javascript:;" onclick="ondel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 删除选中的属性</a> <button class="btn btn-primary radius"  id="tjbtn" form="form-member-add"><i class="Hui-iconfont" >&#xe600;</i> 提交信息</button></span> <span class="r">共有数据：<strong>{{count($data)}}</strong> 条</span> </div>
</article>
<script>
	if($('input[type="checkbox"]').val()==undefined){
			$('#tjbtn').attr('onclick','return false');
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
		}	
	}
</script>		
@endsection
@section('title','规格详情')