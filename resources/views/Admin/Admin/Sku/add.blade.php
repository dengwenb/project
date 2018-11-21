@extends('js')
@section('content')
<script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script> 
<article class="page-container">
	<form action="/adminSku" method="post" class="form form-horizontal" id="form-member-add" >
		@if (empty($_GET['sid']))
		<input type="hidden" name="cate" >
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品分类：</label>
			<div class="formControls col-xs-8 col-sm-8"> <span class="select-box">
				<select class="aa" size="1" id="cate" name="shop">				
					<option value="" class="ss">--选择器--</option>	
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品：</label>
			<div class="formControls col-xs-3 col-sm-3"> <span class="select-box">
				<select class="select" size="1" id="shop" name="shop">
					<option value="" class="ss">--选择器--</option>	
				</select>
				</span> 
			</div>
		</div>
		@endif
		@if(empty($_GET['sid']))
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品组合属性：</label>
			<div class="formControls col-xs-2 col-sm-2"> <span class="select-box">
				<select class="select" size="1" id="relation" name="relation">				
					<option value="" class="ss">--选择器--</option>	
				</select>
				</span> 
				</div>
			</div>
			@else
			<input type="hidden" name="sid" value="{{$_GET['sid']}}">
			<div class="row cl">
			<label class="form-label col-xs-1 col-sm-1">组合属性：</label>
				@foreach($num as $key=>$val)
				<div class="formControls col-xs-2 col-sm-2"> <span class="select-box">
					{{$val->name}}
				<select class="select" size="1" id="relation" name="manyattr[{{$val->attid}}]">				
					<option value="" >--选择器--</option>
						@foreach($attval as $value)
						@if($value->pid==$val->attid)
						<option value="{{$value->vid}}">规格:商品的{{$value->aname}}:{{$value->vname}}</option>	
						@endif
						@endforeach
				</select>
				</span> 
			</div>
				@endforeach
			@endif
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>商品价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="price" name="price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>商品库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="stock" name="stock">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" id="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		{{csrf_field()}}
	</form>
</article>
</body>
@if(empty($_GET['sid']))
<script>
	//第一级别获取
	$.get('/adminSkuorder',{upid:0},function(result){
		//进制请选择选中
		$('.ss').attr('disabled','true');

		//得到的数据数组内容
		//我们要遍历得到里面的每一个对象
		for(var i=0;i<result.length;i++){
			var info =$('<option value="'+result[i].id+'">'+result[i].name+'</option>');
			//config.log(info);
			//将得到的option标签放入到select对象中
			$('#cate').append(info);
		}
	},'json');

	//其他级别内容
	//live  事件委派 他可以帮助我们将动态生成的内容只要选择器相同就可以有相应的事件
	$('select.aa').live('change',function(){
		//将当前的对象存储起来
		obj = $(this);
		//通过id来查找下一个
		id = $(this).val();
		//清除所有其他的select
		obj.nextAll('select').remove();
		$('#relation').html('<option class="mm" >---请选择---</option>');
		$.getJSON('/adminSkuchange',{id:id},function(result){
			if(result !=''){
				//创建一个select标签对象
				var select = $('<select class="aa"></select>');
				//放置当前城市没有办法选择所以我们先写上一个请选择option标签
				var op=$('<option class="mm">--请选择--</option>');
				select.append(op);
				//循环得到的数组里面的option标签添加到select
				for(var i=0;i<result.length;i++){
					var info = $('<option value="'+result[i].id+'">'+result[i].name+'</option>');
					//将option标签添加到select标签中
					select.append(info);
				}
			
			//将select标签添加到当前标签的后面
			obj.after(select);
			//把其他级别的请选择禁用
			$('.mm').attr('disabled','true');
			}
				$.ajax({
					type: 'GET',
					url: '/adminSkushop',
					data: {id:id},
					dataType: 'json',
					success: function(data){
						newdata = data.msg;
							var op = $('<option class="setshop mm" >--请选择--</option>');
							$('#shop').html('');
							$('#shop').append(op);
							// $('#shop').html('<option value="">--请选择--</option>');
							for(var i =0;i<newdata.length;i++){
								console.log(newdata[i]);
								var info = $('<option value="'+newdata[i].id+'">'+newdata[i].name+'</option>');					
								$('#shop').append(info);
							}
							obj.after(select);
							$('.mm').attr('disabled','true');
					},
					error:function(data) {
						console.log(data.msg);
					},
				});			
			
		})
	})

		$('#shop').change(function(){
			var id = $('#shop').val();
			var cateid = $('#cate').val();
				$.ajax({
					type: 'GET',
					url: '/adminSkuship',
					data: {id:id},
					dataType: 'json',
					success: function(data){
						newdata = data.msg;
							if(newdata==''){
								var op = $('<option class="setshop " >暂无该商品属性,请前去商品管理添加属性</option>');
									if(confirm('暂无该商品属性,是否前往商品管理添加该商品属性')){
										picture_edit('添加商品属性',"/adminShopattr/"+id+'/'+cateid+"");
									}
							}else{
								var op = $('<option class="setshop" disabled>--请选择--</option>');
							}
							$('#relation').html('');
							$('#relation').append(op);
							// $('#shop').html('<option value="">--请选择--</option>');
							for(var i =0;i<newdata.length;i++){
								console.log(newdata[i]);
								var info = $('<option value="'+newdata[i].id+'">'+'规格:商品的'+newdata[i].aname+':'+newdata[i].vname+'</option>');					
								$('#relation').append(info);
							}
							obj.after(select);
							$('.mm').attr('disabled','true');
					},
					error:function(data) {
						console.log(data.msg);
					},
				});	
		})

		//获取选中的数据提交到操作页面
		$('#submit').click(function(){
			if($('#shop').val()==null||$('#relation').val()==null||$('#relation').val()=='暂无该商品属性,请前去商品管理添加属性'){
				layer.msg('商品和商品属性必须要选择',{icon:5,time:1000});
				return false;
			}
			var cate;
			if($('select.aa').last().val()==null){
				cate = $('select.aa').last().prev().val();
			}else{
				cate = $('select.aa').last().val();
			}
			$('input[name=cate]').val(cate);
		})

</script>
@endif
</html>
@endsection
@section('title','添加库存')