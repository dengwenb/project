@extends('js')
@section('content')
		
		<div class="page-container">
			<form class="form form-horizontal" id="form-article-add" action="/adminBrand" method="post" enctype="multipart/form-data">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>品牌名：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="" id="" name="name">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select name="cateid" class="select">
		                <option value="0" disabled="disabled">->>顶级选我</option>
		                @foreach ($data as $value)
							
							<option value="{{$value->id}}">{{$value->name}}</option>
						@endforeach
						</select>
						</span>
					</div>
				</div>

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">商品id</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="0" placeholder="" id="" name="sid">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">描述</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="0" placeholder="" id="" name="describe">
					</div>
				</div>

		
	
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
                    
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
                    不显示<input type="radio" id="checkbox-1" name="state"value="0">
                   
                    </label>
                </div>
            </div>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box">
                <label for="checkbox-2">&nbsp;
                    显示<input type="radio" id="checkbox-2" name="state"value="1">
                   
                    </label>
                </div>
            </div>
        </div>
        {{csrf_field()}}
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
@section('title','品牌添加')