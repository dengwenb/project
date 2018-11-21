@extends('js')
@section('content')
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="/adminModule">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>(模块/方法)中文名字：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$data->cname}}" placeholder="" id="" name="cname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否启用：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="status" class="select">
					<option value="0" {{$select[0]}}>禁用</option>
					<option value="1" {{$select[1]}}>启用</option>
				</select>
				</span>
			</div>
		</div>
	
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit" form="form-article-add" ><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
		{{ method_field('PUT') }}
		{{csrf_field()}}
	</form>
</div>
</body>
</html>
@endsection
@section('title','修改')