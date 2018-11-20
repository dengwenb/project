@extends("Home.Public.public")
@section("home")

  <!-- 手机号登录 -->
    <section class="main-container col1-layout">
    <div class="main container">
      
        
        <div class="page-content">
          
            <div class="account-login">
             <div class="box-authentication">
                <h4>短信登录</h4>
                <form action="/dophonelogin" method="post" id="ff">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎使用短信登录到您的帐户</p>
                <label for="emmail_login">输入手机号:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="phonelogin" value="" placeholder="请输入手机号">
                 <label for="emmail_login">输入验证码:<span class="required">*</span></label><br/>
                <input  type="text" name="yzm" placeholder="请输入验证码" style="width:150px;height:35px;"><a class="btn btn-success" id="boxx" disabled>获取验证码</a><br/><font color="red" id="font"></font><br/>
                <p class="forgot-pass"><a href="/retrieve">密码丢失了？ </a><a href="/emaillogin" style="color:red;" id="you">邮箱登录</a>　<a href="/homelogin" style="color:red;" >用户名登录</a>　<a  id="zhu" href="/registercontroller">注册</a></p>
                <input class="btn btn-success" type="submit" value="登录">
                </form>
              </div>
            </div>
        </div>
      </div>

    </div>
  </section>
             
              <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
              <script>
              flag=false;
              
              flages=false;
                  $("input[name='phonelogin']").blur(function(){
                   phone=$(this).val();
                   strs=/^1[34578]\d{9}$/;
                          if(strs.test(phone)){
                            $('#boxx').attr('disabled',false);
                            $('#font').html();
                            flag=true;
                          }else{
                            $('#font').html('手机不符合格式');
                            $('#boxx').attr('disabled',true);
                          }
                  });

                  $("#boxx").click(function(){
                      phone=$("input[name='phonelogin']").val();
                      // alert(phone);
                      o=$(this);
                      if($(this).attr('disabled')){
                        // alert('df');
                        return false;
                      }
                      $.get('/phoneloginajax',{phone:phone},function(data){
                        // alert(data.code);
                        if(data.code==000000){
                          m=60;
                          mytimmer=setInterval(function(){
                            m--;
                            o.html(m+'秒后重新发送');
                            o.attr('disabled',true);
                            if(m==0){
                              clearInterval(mytimmer);
                              o.attr('disabled',false);
                              o.html('重新发送');
                            }
                          },1000);
                        }
                      },'json');
                  });
                  $("input[name='yzm']").blur(function(){
                      yzm=$(this).val();
                      $.get('/phoneloginajaxyzm',{code:yzm},function(data){
                        // alert(data);
                        if(data==1){
                          // alert('ok');
                          $('#font').html('√').css('color','green');
                          flages=true;
                        }else if(data==2){
                          $('#font').html('校验码不一致');
                           flages=false;
                        }else if(data==3){
                          $('#font').html('校验码不能为空');
                           flages=false;
                        }else{
                          $('#font').html('校验码过期');
                          flages=false;
                        }
                      },'json');
                  });
                  $('#ff').submit(function(){
                    if(flag && flages){
                      return true;
                    }else{
                     return false;
                    }
                  });
              </script>
@endsection
@section('title','手机登录')