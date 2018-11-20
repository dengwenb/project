@extends('HomeLoginPublic')
@section('homelogin')
  <div class="box-authentication" >
                <h4>邮箱注册</h4>
                <form action="/dohomeemail" method="post" id="fff">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎使用邮箱注册帐户</p>
                <label for="emmail_login">邮箱地址:<span class="required">*</span></label>
                <input id="emmail_login" type="email" class="form-control" name="email" value="" reminder="请输入邮箱地址"><span></span><br/>
                <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="password" reminder="密码由数字和字母组合 6~15位"><span></span><br/>
                <label for="password_login">输入验证码:<span class="required">*</span></label>
                <input type="text" name="yanzhenma" reminder="输入验证码" style="width:100px;height:40px;"><img src="/captcha" onclick="this.src=this.src+'?a=1'">
              	<br><span></span>
                <p class="forgot-pass">或者使用　<a  href="/registercontroller" style="color:red;">手机注册</a></p>
                <input class="btn btn-success" type="submit" value="注册">
                </form>
              </div>
               <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
              <script>
                flag=false;
                flage=false;
                flages=false;
                  $("input").focus(function(){
                    reminder=$(this).attr('reminder');
                    $(this).next('span').html(reminder).css('color','red');
                  });
                  $("input[name='email']").blur(function(){
                      ee=$(this).val();
                      oo=$(this);
                      str=ee.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/);
                      if(str){
                          //ajax判断邮箱是否被注册
                          $.get('/dohomeemailajax',{email:ee},function(data){
                            if(data==1){
                               oo.next('span').html('邮箱已注册').css('color','red');
                            }else{
                              oo.next('span').html('邮箱可用').css('color','green');
                              flag=true;
                            }
                          });
                      }else{
                        oo.next('span').html('请输入正确的邮箱地址').css('color','red');
                      }
                  });
                  // 验证密码
                  $("input[name='password']").blur(function(){
                    pp=$(this).val();
                    str2=pp.match(/^[0-9a-zA-Z_]{6,15}$/);
                    if(str2){
                      $(this).next('span').html('★★★★').css('color','green');
                      flage=true;
                    }else{
                      $(this).next('span').html('请输入正确的密码').css('color','red');
                      flage=false;
                    }
                  });
                  //验证验证码
                  $("input[name='yanzhenma']").blur(function(){
                    yy=$(this).val();
                    yyy=$(this);
                    $.get('/yanzhengma',{yzm:yy},function(data){
                        if(data==1){
                          yyy.next('img').next('br').next('span').html('√').css('color','green');
                          flages=true;
                        }else if(data==2){
                          yyy.next('img').next('br').next('span').html('验证码不能为空').css('color','red');
                          flages=false;
                        }else{
                          yyy.next('img').next('br').next('span').html('验证码错误').css('color','red');
                        }
                    });
                  });
                  $('#fff').submit(function(){
                    $("input").trigger("focus");
                    if(flag && flage && flages){
                      return true;//ok
                    }else{
                      return false;//阻止页面提交
                    }
                  });
              </script>
@endsection
@section('title','邮箱注册')