<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/Admin/lib/respond.min.js"></script>
<![endif]-->
<link href="/static/Admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/static/Admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/static/Admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>温水煮青蛙后台登录系统</title>
</head>
<body>

<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">

  <div id="loginform" class="loginBox">
        @if(session('error'))
{{session('error')}}
@endif
    <form class="form form-horizontal" action="/adminlogin" method="post">
      <div class="row cl">

        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
              <div class="formControls col-xs-8 col-xs-offset-3">
                <div class="col-md-3">
                      <input id="captcha" class="input-text size-L" type="captcha" name="captcha" value="{{ old('captcha')  }}" placeholder="验证码" style="width:80px;text-algin:left;" required>
                      @if($errors->has('captcha'))
                          <div class="col-md-12">
                              <p class="text-danger text-left" style="width:100px;">{{$errors->first('captcha')}}</p>
                          </div>
                      @endif
                  </div>

                  <div class="col-md-4">
                      <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()"><a id="kanbuq" href="javascript:;">看不清，换一张</a>
                  </div>
            </div> 
      <!-- <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码"   style="width:150px;">
          <img src=""> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div> -->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
        {{csrf_field()}}
          <input type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
<script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/Admin/static/h-ui/js/H-ui.min.js"></script>
</body>

</html>