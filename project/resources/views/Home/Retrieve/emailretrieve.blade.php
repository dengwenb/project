@extends('HomeLoginPublic')
@section('homelogin')
<!-- 邮箱登录 -->
              <div class="box-authentication" >
                <h4>邮箱找回密码</h4>
                <font color="red">@if(session('yzm')) {{session('yzm')}} @endif</font>
                <form action="/emailretrieves" method="post" id="ff">
                {{csrf_field()}}
                <label for="emmail_login">输入你的邮箱地址:<span class="required">*</span></label>
                <input id="emmail_login" type="email" required class="form-control" name="email" value="" placeholder="请输入邮箱地址">
                <font color="red">@if(session('youxiang')) {{session('youxiang')}} @endif</font>
                <label for="password_login">输入验证码:<span class="required">*</span></label>
                <input type="text" name="yanzhengma" placeholder="输入验证码" style="width:100px;height:40px;"><img src="/captcha" onclick="this.src=this.src+'?a=1'"><br>
              	<p class="forgot-pass"><a href="#" style="color:purple;">手机找回密码 </a></p>
                <input class="btn btn-success" type="submit" value="登录">
                </form>
              </div>
              <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script>

@endsection
@section('title','邮箱登录')