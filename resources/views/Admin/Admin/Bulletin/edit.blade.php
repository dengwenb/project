@extends('js')
@section('content')
<article class="page-container">
	<form action="/adminArticle/{{$data->id}}" method="post" class="form form-horizontal" id="form-member-add"  enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公告标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$data->title}}" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">优先级：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="priority">
					<option value="0" @if ($data->priority==0) selected @endif>普通</option>
					<option value="1"  @if ($data->priority==1) selected @endif>一般</option>
					<option value="2"  @if ($data->priority==2) selected @endif>紧急</option>
					<option value="3"  @if ($data->priority==3) selected @endif>非常紧急</option>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="status">
					<option value="0" @if ($data->status==0) selected @endif>草稿</option>
					<option value="1" @if ($data->status==1) selected @endif>发布</option>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="content" cols="" rows="" class="textarea"  placeholder="文章内容...最少输入10个字符" >{{$data->content}}</textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		{{method_field('PUT')}}
		{{csrf_field()}}
	</form>
</article>
</body>
</html>
@endsection
@section('title','文章编辑')