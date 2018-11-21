<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="renderer" content="webkit|ie-comp|ie-stand" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <link rel="Bookmark" href="/favicon.ico" /> 
  <link rel="Shortcut Icon" href="/favicon.ico" /> 
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
  <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载" /> 
  <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。" /> 
 </head> 
 <body> 


  <header class="navbar-wrapper"> 
   <div class="navbar navbar-fixed-top"> 
    <div class="container-fluid cl"> 
     <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> 
     <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> 
     <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> 
     <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;"></a> 
     <nav class="nav navbar-nav"> 
      <ul class="cl"> 
       <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont"></i> 新增 <i class="Hui-iconfont"></i></a> 
        <ul class="dropDown-menu menu radius box-shadow"> 
         <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont"></i> 资讯</a></li> 
         <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont"></i> 图片</a></li> 
         <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont"></i> 产品</a></li> 
         <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont"></i> 用户</a></li> 
        </ul> </li> 
      </ul> 
     </nav> 
     <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs"> 
      <ul class="cl"> 
       <li>超级管理员</li> 

       <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">{{session('name')}}<i class="Hui-iconfont"></i></a> 
        <ul class="dropDown-menu menu radius box-shadow"> 
         <li><a href="javascript:;" onclick="myselfinfo()">个人信息</a></li> 
         <li><a href="#">切换账户</a></li> 
         <li><a href="/adminLogin/create">退出</a></li> 

       <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont"></i></a> 
        <ul class="dropDown-menu menu radius box-shadow"> 
         <li><a href="javascript:;" onclick="myselfinfo()">个人信息</a></li> 
         <li><a href="#">切换账户</a></li> 
         <li><a href="#">退出</a></li> 

        </ul> </li> 
       <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px"></i></a> </li> 
       <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px"></i></a> 
        <ul class="dropDown-menu menu radius box-shadow"> 
         <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li> 
         <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li> 
         <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li> 
         <li><a href="javascript:;" data-val="red" title="红色">红色</a></li> 
         <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li> 
         <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li> 
        </ul> </li> 
      </ul> 
     </nav> 
    </div> 
   </div> 
  </header> 
  <aside class="Hui-aside"> 
   <div class="menu_dropdown bk_2"> 

    <dl id="menu-picture"> 
   
     <dd> 
      <ul> 
       <li><a data-title="图片管理" data-href="/adminpicture">图片管理</a></li> 
      </ul> 
     </dd> 
    </dl> 

    <dl id="menu-product"> 
     <dt>
      <i class="Hui-iconfont"></i> 订单管理
          <li><a data-href="/adminOrder" data-title="产品管理" href="javascript:void(0)">订单表</a></li> 
      <li><a data-href="/adminReviews" data-title="意见反馈" href="javascript:void(0)">订单评论</a></li>
       <li><a data-title="商品管理" data-href="/adminShop">商品管理</a></li> 
       <li><a data-title="库存列表" data-href="/adminSku/create">添加商品库存</a></li>
      </ul> 
     </dd> 
    </dl> 
     <dl id="menu-picture"> 
     <dt>
      <i class="Hui-iconfont"></i> 链接管理<i class="Hui-iconfont menu_dropdown-arrow"></i>
     </dt> 
     <dd> 
      <ul> 

       <!-- <li><a data-href="/adminbrand" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>  -->
       <!-- <li><a data-href="/adminclass" data-title="订单表" href="javascript:void(0)">订单表</a></li>  -->
       <li><a data-href="/adminOrder" data-title="产品管理" href="javascript:void(0)">订单表</a></li> 
      <li><a data-href="/adminReviews" data-title="意见反馈" href="javascript:void(0)">订单评论</a></li>
      </ul> 
     </dd> 
    </dl> 
    
    <dl id="menu-member"> 
     <dt>
      <i class="Hui-iconfont"></i> 会员管理

        <li><a data-title="链接管理" data-href="/adminLink">链接列表</a></li>
       <li><a data-title="添加链接" data-href="/adminLink/create">添加链接</a></li> 
      </ul> 
     </dd> 
    </dl> 
    <dl id="menu-picture"> 
     <dt>
      <i class="Hui-iconfont"></i> 文章管理

      <i class="Hui-iconfont menu_dropdown-arrow"></i>
     </dt> 
     <dd> 
      <ul> 

       <li><a data-href="/adminuser" data-title="会员列表" href="javascript:;">会员列表</a></li> 
       <li><a data-href="/adminuser/create" data-title="分享记录" href="javascript:void(0)">会员添加</a></li> 
      </ul> 
     </dd> 
    </dl> 
    <dl id="menu-admin"> 
     <dt>
      <i class="Hui-iconfont"></i> 管理员管理

        <li><a data-title="文章列表" data-href="/adminArticle">文章列表</a></li>
       <li><a data-title="添加文章" data-href="/adminArticle/create">添加文章</a></li> 
      </ul> 
     </dd> 
    </dl> 
     <dl id="menu-picture"> 
     <dt>
      <i class="Hui-iconfont"></i> 轮播图管理

      <i class="Hui-iconfont menu_dropdown-arrow"></i>
     </dt> 
     <dd> 
      <ul> 
       <li><a data-href="/adminstrator/create" data-title="角色管理" href="javascript:void(0)">管理员添加</a></li> 
       <li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li> 
       <li><a data-href="/adminstrator" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li> 
      </ul> 
     </dd> 
    </dl> 
    <dl id="menu-tongji"> 
     <dt>
      <i class="Hui-iconfont"></i> 系统统计

        <li><a data-title="轮播图列表" data-href="/adminBroadcast">轮播图列表</a></li>
       <li><a data-title="添加轮播图" data-href="/adminBroadcast/create">添加轮播图</a></li> 
      </ul> 
     </dd> 
    </dl> 
      <dl id="menu-picture"> 
     <dt>
      <i class="Hui-iconfont"></i> 公告管理

      <i class="Hui-iconfont menu_dropdown-arrow"></i>
     </dt> 
     <dd> 
      <ul> 

       <li><a data-href="charts-1.html" data-title="折线图" href="javascript:void(0)">折线图</a></li> 
       <li><a data-href="charts-2.html" data-title="时间轴折线图" href="javascript:void(0)">时间轴折线图</a></li> 
       <li><a data-href="charts-3.html" data-title="区域图" href="javascript:void(0)">区域图</a></li> 
       <li><a data-href="charts-4.html" data-title="柱状图" href="javascript:void(0)">柱状图</a></li> 
       <li><a data-href="charts-5.html" data-title="饼状图" href="javascript:void(0)">饼状图</a></li> 
       <li><a data-href="charts-6.html" data-title="3D柱状图" href="javascript:void(0)">3D柱状图</a></li> 
       <li><a data-href="charts-7.html" data-title="3D饼状图" href="javascript:void(0)">3D饼状图</a></li> 
      </ul> 
     </dd> 
    </dl> 
    <dl id="menu-system"> 
     <dt>
      <i class="Hui-iconfont"></i> 系统管理

        <li><a data-title="公告列表" data-href="/adminBulletin">公告列表</a></li>
        <li><a data-title="添加公告" data-href="/adminBulletin/create">添加公告</a></li>
      </ul> 
     </dd> 
    </dl> 
      <dl id="menu-picture"> 
     <dt>
      <i class="Hui-iconfont"></i> 模块管理

      <i class="Hui-iconfont menu_dropdown-arrow"></i>
     </dt> 
     <dd> 
      <ul> 

       <li><a data-href="/adminsystem" data-title="系统设置" href="javascript:void(0)">系统设置</a></li> 
       <li><a data-href="system-category.html" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li> 
       <li><a data-href="system-data.html" data-title="数据字典" href="javascript:void(0)">数据字典</a></li> 
       <li><a data-href="system-shielding.html" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li> 
       <li><a data-href="system-log.html" data-title="系统日志" href="javascript:void(0)">系统日志</a></li> 

        <li><a data-title="模块列表" data-href="/adminModule">模块列表</a></li>

      </ul> 
     </dd> 
    </dl> 
   </div> 
  </aside> 
  <div class="dislpayArrow hidden-xs">
   <a class="pngfix" href="javascript:void(0);" onclick="displaynavbar(this)"></a>
  </div> 
  <section class="Hui-article-box"> 
   <div id="Hui-tabNav" class="Hui-tabNav hidden-xs"> 
    <div class="Hui-tabNav-wp"> 
     <ul id="min_title_list" class="acrossTab cl"> 
      <li class="active"> <span title="我的桌面" data-href="welcome.html">我的桌面</span> <em></em></li> 
     </ul> 
    </div> 
    <div class="Hui-tabNav-more btn-group">
     <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont"></i></a>
     <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont"></i></a>
    </div> 
   </div> 
   <div id="iframe_box" class="Hui-article"> 
    <div class="show_iframe"> 
     <!-- <div style="display:none" class="loading"></div> 
     <iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>  -->
      @section('content')

      

      @show
   <!--  </div>  -->
   </div> 
  </section> 
  <div class="contextMenu" id="Huiadminmenu"> 
   <ul> 
    <li id="closethis">关闭当前 </li> 
    <li id="closeall">关闭全部 </li> 
   </ul> 
  </div> 
  <!--_footer 作为公共模版分离出去--> 
  <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="/static/Admin/lib/layer/2.4/layer.js"></script> 
  <script type="text/javascript" src="/static/Admin/static/h-ui/js/H-ui.min.js"></script> 
  <script type="text/javascript" src="/static/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
  <!--/_footer 作为公共模版分离出去--> 
  <!--请在下方写此页面业务相关的脚本--> 
  <script type="text/javascript" src="/static/Admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script> 
  <script type="text/javascript">
$(function(){
  /*$("#min_title_list li").contextMenu('Huiadminmenu', {
    bindings: {
      'closethis': function(t) {
        console.log(t);
        if(t.find("i")){
          t.find("i").trigger("click");
        }   
      },
      'closeall': function(t) {
        alert('Trigger was '+t.id+'\nAction was Email');
      },
    }
  });*/
});
/*个人信息*/
function myselfinfo(){
  layer.open({
    type: 1,
    area: ['300px','200px'],
    fix: false, //不固定
    maxmin: true,
    shade:0.4,
    title: '查看信息',
    content: '<div>管理员信息</div>'
  });
}

/*资讯-添加*/
function article_add(title,url){
  var index = layer.open({
    type: 2,
    title: title,
    content: url
  });
  layer.full(index);
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
/*产品-添加*/
function product_add(title,url){
  var index = layer.open({
    type: 2,
    title: title,
    content: url
  });
  layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
  layer_show(title,url,w,h);
}


</script> 
  

 </body>
</html>