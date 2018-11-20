@extends('js')
@section('content')

<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="/adminLog/{{$id}}" method="post" enctype="multipart/form-data">
		@foreach ($data as $value)
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>物流名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$value->name}}" placeholder="" id="" name="name">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">邮费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$value->postage}}" placeholder="" id="" name="postage">
			</div>
		</div>
	
		
		
	
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>

			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"> <img src="{{$value->log}}" width="150" height="100" alt=""></div>
                   
					<div id="filePicker">选择图片</div>
					<input id="btn-star" type="file" class="btn btn-default btn-uploadstar radius ml-10" name ="log">
				</div>
			</div>
		</div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否上架：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box">
                 <label for="checkbox-1">&nbsp;
                    不上架<input type="radio" id="checkbox-1" name="state"value="0" @if ($value->state==0) checked="checked" @endif>
                   
                    </label>
                </div>
            </div>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box">
                <label for="checkbox-2">&nbsp;
                    上架<input type="radio" id="checkbox-2" name="state"value="1" @if ($value->state==1) checked="checked" @endif>
                   
                    </label>
                </div>
            </div>
        </div>
        @endforeach
        {{csrf_field()}}
        {{ method_field('PUT') }}
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>


</body>
</html>
@endsection
@section('title','物流添加')