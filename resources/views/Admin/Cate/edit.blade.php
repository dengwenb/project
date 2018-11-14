@extends('js')
@section('content')
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="/adminCate/{{$data[0]->id}}" method="post">
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类所在栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="id" class="select">
                <option value="0" disabled="disabled">所有分类栏目</option>
                @foreach ($cate as $value)
					<option value="{{$value->id}}"  @if($value->id==$data[0]->id) selected   @endif disabled="disabled">{{$value->name}}</option>
					
				@endforeach
					

				</select>
				</span>
			</div>
		</div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>修改分类名</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$data[0]->name}}" placeholder="" id="" name="name">
                <input type="hidden" name="id" value="{{$data[0]->id}}">
            </div>
        </div>

        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否上架</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="state" class="select">
                <option value="" disabled="disabled">请选择</option>
               	
					<option value="0"  @if($data[0]->state==0 ) selected @endif>上架</option>
					<option value="1"  @if($data[0]->state==1) selected @endif>不上架</option>
				
				</select>
				</span>
			</div>
		</div>
	
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
            {{csrf_field()}}
			{{method_field('PUT')}}
				<button  class="btn btn-primary radius" type="submit"> 提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>				</div>
		</div>
	</form>
</div>
</body>

</html>
@endsection
@section('title','分类添加')