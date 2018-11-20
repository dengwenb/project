@extends('js')
@section('content')
	<form class="form form-horizontal" id="form-article-add" method="post" action="/adminLink/{{$data->id}}">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>链接名字：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$data->name}}" placeholder="" id="" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>url地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$data->url}}" placeholder="" id="" name="url">
			</div>
		</div>
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否隐藏：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="display" class="select">
					<option value="0" @if ($data->display==0) selected @endif>隐藏</option>
					<option value="1" @if ($data->display) selected @endif>显示</option>
				</select>
				</span>
			</div>
		</div>
	
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit" form="form-article-add" ><i class="Hui-iconfont">&#xe632;</i> 修改</button>
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
@section('title','链接修改')