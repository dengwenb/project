@extends('js')
@section('content')
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="allclick()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe601;</i> 全选或全不选 </a> <a href="javascript:;" onclick="orderclick()" class="btn btn-secondary-outline radius"><i class="Hui-iconfont">&#xe608;</i> 反选 </a> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加图片','/adminPictureadd/{{$data[0]->sid}}')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加图片</a></span> <span class="r">共有数据：<strong></strong>{{count($data)}} 条</span> </div>
<div class="portfolio-content">
		<ul class="cl portfolio-area">
			@foreach($data as $key=>$row)
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="{{ substr($row->path,1)}}" data-lightbox="gallery" data-title="商品图片"><img src="{{ substr($row->path,1)}}"></a></div>
					<div class="textbox" style="text-align:center">商品图片{{$key+1}}</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/Admin/lib/lightbox2/2.8.1/js/lightbox.min.js"></script> 
<script type="text/javascript">
$(function(){
	$(".portfolio-area li").Huihover();
});
</script>
@endsection
@section('title','文章详情')