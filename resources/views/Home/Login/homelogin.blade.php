@extends('HomeLoginPublic')
@section('homelogin')
<!-- 用户名登录 -->
              <div class="box-authentication">
                <h4>登录</h4>
                
                <form action="/homelogin" method="post">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎回来！登录到您的帐户</p>
                <label for="emmail_login">用户名:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="请输入用户名"><font color="red" id="font1">@if(session('user')) {{session('user')}} @endif</font><br/>
                <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="password" placeholder="请输入密码"><font color="red" id="font2">@if(session('pass')) {{session('pass')}} @endif </font><br/>
                <p class="forgot-pass"><a href="/retrieve">密码丢失了？ </a><a href="/emaillogin" style="color:red;">邮箱登录</a>　<a href="/phonelogin" style="color:red;" >短信登录</a>　<a href="/registercontroller">注册</a></p>
                <input class="btn btn-success" type="submit" value="登录"><label class="inline" for="rememberme"></label>
                </form>
              </div>
@endsection
@section('title','用户名登录')