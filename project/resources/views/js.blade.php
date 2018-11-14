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
<link href="/static/Admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
<!--[if IE 6]>
<script type="text/javascript" src="/static/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>@yield('title')</title>
</head>
<body>
	@if ($mname = session('controller')[0] ) @endif
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
	@if (session('controller')[1]=='create'||session('controller')[1]=='edit' ||session('controller')[1]=='show' ||session('controller')[1]=='picadd'
	||session('controller')[1]=='attrshow')
	@else
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>{{session('controller')[0]}}管理 <span class="c-gray en">&gt;</span> {{session('controller')[0]}}列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="allclick()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe601;</i> 全选或全不选 </a> <a href="javascript:;" onclick="orderclick()" class="btn btn-secondary-outline radius"><i class="Hui-iconfont">&#xe608;</i> 反选 </a> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加{{session('controller')[0]}}','/admin{{$mname}}/create')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加{{session('controller')[0]}}</a></span> <span class="r">共有数据：<strong>{{count($data)}}</strong> 条</span> </div>
	@endif
	<input type="hidden" value="{{session('success')}}" id="test111">
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
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

//点击tr触发点击
$('tbody .text-c td').not('.null').click(function(){
		$(this).parent().find('input[type="checkbox"]').click();
})

//反选
function orderclick(){
	$('.null>input').each(function(){
		   $(this).click();	
	})
}

// //全选 反选
function allclick()
{
	$('thead input[type="checkbox"]').click();
}

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
/*删除*/
function picture_del(obj,id){
	var token = $('input[name="_token"]').val();
	var method = $('input[name="_method"]').val();
	// var path = $(obj).parents('tr').find('.picture-thumb').attr('src');
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/admin{{$mname}}/'+id,
			data: {id:id,'_token':token,'_method':method},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					$(obj).parents("tr").remove();
					layer.msg(data.msg,{icon:1,time:1000});
				}else{
					layer.msg(data.msg,{icon:0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

//批量删除
function datadel()
{
	id='';
	var check = $('.null>input:checked');
	$('.null>input:checked').each(function(){
		id=id+($(this).parent().next().html())+',';
	})
		id=id.slice(0,-1);
		$.ajax({
			type: 'GET',
			url: '/admin{{$mname}}delall',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					check.parents('tr').remove();
					layer.msg(data.msg,{icon: 1,time:1000});
				}else{
					layer.msg(data.msg,{icon: 0,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
}

/*修改状态*/
function link_display(obj,id,display){
	// var status=new Array("1","0");
			$.ajax({
			type: 'GET',
			url: '/admin{{$mname}}status',
			data: {id:id,display:display},
			dataType: 'json',
			success: function(data){
				if(data.result==1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="link_display(this,'+id+','+data.display+')" href="javascript:;"><i class="Hui-iconfont">&#xe603;</i></a>');
					if(data.display==0){
						$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">'+data.msg+'</span>');
					}else{
						$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">'+data.msg+'</span>');
					}
					$(obj).remove();
					layer.msg('操作成功,已'+data.msg+'!',{icon: 6,time:1000});
				}else{
						layer.msg('操作失败!,请不要频繁操作',{icon: 0,time:1000});
				}			
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
}
</script>
<script>
	$('select[name="DataTables_Table_0_length"]').css('width','66px');
	$('select[name="DataTables_Table_0_length"]').prepend('<option value="10" bbb="aaa" disabled>请选择</option>');
	$('option[bbb="aaa"]').attr('selected','true');
</script>
@if (session('success'))
	<script>	
		setTimeout(function(){
			if(parent.location.href!='http://www.lyd.cn/admin' &&parent.location.href!='http://www.lyd.cn/adminShop'){
				parent.location.reload();
			}
		},500);
		setTimeout(function()
		{    
			parent.layer.msg("{{session('success')}}",{icon:1,time:1500});
		},50);
	</script>
	
@endif
</body>

