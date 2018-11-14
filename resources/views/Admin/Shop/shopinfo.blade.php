@extends('js')
@section('content')
@if (session('success'))
@else

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品详情 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
@endif
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="/adminshop" method="post">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="name">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="pid" class="select">
                    
					<option value="0">全部栏目</option>
                    @foreach ($data as $value)
					<option value="{{$value->id}}">{{$value->name}}</option>
				    @endforeach
				</select>
				</span>
			</div>
		</div>
		<!-- <div class="row cl"> -->
		<!-- 	<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="">
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否上架：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
                 <label for="checkbox-1">&nbsp;
					不上架<input type="radio" id="checkbox-1" name="state"value="0">
                   
					</label>
				</div>
			</div>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box">
                <label for="checkbox-2">&nbsp;
                    上架<input type="radio" id="checkbox-2" name="state"value="1">
                   
                    </label>
                </div>
            </div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>添加日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" name="addtime">
			</div>
		</div>
		
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品信息：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">单价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片摘要：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div> -->
        <!-- 图片上传 -->
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">选择图片</div>
					<button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container"> 
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<div id="filePicker-2"></div>
							<p>或将照片拖到这里，单次最多可选300张</p>
						</div>
					</div>
					<div class="statusBar" style="display:none;">
						<div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                 {{csrf_field()}}
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"> 添加</button>
				
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

@endsection
@section('title','商品添加')