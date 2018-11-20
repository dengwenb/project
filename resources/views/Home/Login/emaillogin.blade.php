@extends("Home.Public.public")
@section("home")
<!-- 邮箱登录 -->
          <section class="main-container col1-layout">
        <div class="main container">
          
            
            <div class="page-content">
              
                <div class="account-login">
                     <div class="box-authentication" align="center">
                    <h4>邮箱登录</h4>
                    <form action="/doemaillogin" method="post">
                    {{csrf_field()}}
                   <p class="before-login-text" id="box">欢迎使用邮箱登录到您的帐户</p>
                    <label for="emmail_login">邮箱地址:<span class="required">*</span></label>
                    <input id="emmail_login" type="email" required class="form-control" name="email" value="" placeholder="请输入邮箱地址">
                    <font color="red">@if(session('youxiang')) {{session('youxiang')}} @endif</font>
                    <label for="password_login">密码:<span class="required">*</span></label>
                    <input  type="password" class="form-control" required name="emailpass" placeholder="请输入密码"><font color="red">@if(session('pass')) {{session('pass')}} @endif</font>
                    <label for="password_login">输入验证码:<span class="required">*</span></label>
                    <input type="text" name="yanzhengma" placeholder="输入验证码" style="width:100px;height:40px;"><img src="/captcha" onclick="this.src=this.src+'?a=1'"><br><font color="red">@if(session('yzm')) {{session('yzm')}} @endif</font>
                    <p class="forgot-pass"><a href="/retrieve">密码丢失了？ </a><a href="/homelogin" style="color:red;" id="you">用户名登录</a>　<a href="/phonelogin" style="color:red;" >短信登录</a>  <a href="/registercontroller" style="color:red;">注册</a></p>
                    <input class="btn btn-success" type="submit" value="登录">
                    </form>
                  </div>
                </div>
            </div>
          </div>

        </div>
  </section>
@endsection
@section('title','邮箱登录')
