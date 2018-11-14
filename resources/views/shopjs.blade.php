<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/Admin/static/h-ui/css/H-ui.min.css" />

<link rel="stylesheet" type="text/css" href="/static/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>@yield('title')</title>
</head>
<body>
	@if (session('success'))
	<div class="alert alert-success">
		<div class="Huialert Huialert-success">
			<button type="button" class="close  btn-info" data-dismiss="alert" aria-label="Close" style="width:100%;color:black;opacity:1;font-family: 宋体;font-weight: bold" style="margin-bottom:1px;position: relative;"><i class="icon Hui-iconfont" style="color:black;position:absolute;right:60%;top:31%;font-size:20px;color:green;opacity:1.2">&#xe68e;</i>{{session('success')}}
			</button>
		</div>
	</div>
	@endif
	@if (session('error'))
	<div class="alert alert-danger">
		<div class="Huialert Huialert-danger">
			<button type="button" class="close  btn-info" data-dismiss="alert" aria-label="Close" style="width:100%;color:black;opacity:1;font-family: 宋体;font-weight: bold" style="margin-bottom:1px;position: relative;"><i class="icon Hui-iconfont" style="color:black;font-weight:bold;position:absolute;right:60%;top:31%;font-size:20px;color:red;opacity:1.2">&#xe691;</i>{{session('error')}}
			</button>
		</div>
	</div>
	@endif
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<div class="Huialert Huialert-error">
			<button type="button" class="close  btn-danger" data-dismiss="alert" aria-label="Close" style="width:100%;color:black;opacity:1;font-family: 宋体;font-weight: bold" style="margin-bottom:1px;position: relative;"><i class="icon Hui-iconfont" style="color:black;font-weight:bold;position:absolute;right:60%;top:31%;font-size:{{20*count($errors)}}px;color:red;opacity:1.2">&#xe691;</i>
		@foreach ($errors->all() as $error)
  				{{$error}}<br/>
		@endforeach
			</button>
		</div>
	</div>
	@endif
@section('content')
@show
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});

/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}

/*图片-下架*/
// function picture_stop(obj,id){
// 	layer.confirm('确认要下架吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
// 		$(obj).remove();
// 		layer.msg('已下架!',{icon: 5,time:1000});
// 	});
// }

// /*图片-发布*/
// function picture_start(obj,id){
// 	layer.confirm('确认要发布吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布!',{icon: 6,time:1000});
// 	});
// }

/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

</script>
<!-- 系统设置 js-->
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#tab-system").Huitab({
		index:0
	});
});
</script>
<script>
	$('select[name="DataTables_Table_0_length"]').css('width','66px');
	$('select[name="DataTables_Table_0_length"]').prepend('<option value="10" bbb="aaa" disabled>请选择</option>');
	$('option[bbb="aaa"]').attr('selected','true');
</script>
@if (session('success'))
	<script>	
		
		setTimeout(function()
		{    
			layer.msg("{{session('success')}}",{icon:1,time:1500});
		},2);
	</script>
	
@endif
</body>
</html>