@extends('js')
@section('content')

<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="/adminCate" method="post">
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="pid" class="select">
                <option value="0" disabled="disabled">->>顶级选我</option>
                @foreach ($data as $value)
					
					<option value="{{$value->id}}">{{$value->name}}</option>
				@endforeach
				</select>
				</span>
			</div>
		</div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="" name="name">
            </div>
        </div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否上架</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="state" class="select">
                <option value=""disabled="disabled">请选择</option>
               
					
					<option value="0">上架</option>
					<option value="1">不上架</option>
				
				</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
            {{csrf_field()}}

				<button  class="btn btn-primary radius" type="submit"> 提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>			</div>
		</div>
	</form>
</div>
</body>

</html>
@endsection
@section('title','分类添加')