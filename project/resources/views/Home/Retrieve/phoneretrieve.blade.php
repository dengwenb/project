@extends('HomeLoginPublic')
@section('homelogin')
  <!-- 手机号登录 -->
              <div class="box-authentication">
                <h4>短信找回密码</h4>
                <form action="/phoneretrieves" method="post" id="ff">
                {{csrf_field()}}
                <label for="emmail_login">输入注册过的手机号:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="phone" value="" placeholder="请输入手机号"><font color="red">@if(session('phone')) {{session('phone')}} @endif</font><br/>
                 <label for="emmail_login">输入验证码:<span class="required">*</span></label><br/><font color="red" id="font">@if(session('kong')) {{session('yzm')}} @endif  @if(session('error')) {{session('error')}} @endif</font><br/>
                <input  type="text" name="yzm" placeholder="请输入验证码" style="width:150px;height:35px;"><a class="btn btn-success" id="boxx" disabled>获取验证码</a><br/>
                <p class="forgot-pass"><a href="/emailretrieve" style="color:purple;">邮箱找回密码 </a></p>
                <input class="btn btn-success" type="submit" value="找回">
                </form>
              </div>
               <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
              <script>
                flag=false;
                flage=false;
                  $("input[name=phone]").blur(function(){
                    phone=$(this).val();
                    o=$(this);
                    var mytimmer;
                    clearInterval(mytimmer);
                    //正则验证手机号码
                    if(phone.match(/^1[34578]\d{9}$/)){
                          $('#boxx').attr('disabled',false);
                          o.next('font').html('');
                          // 验证成功触发发送验证码
                          $('#boxx').click(function(){
                              oo=$(this);
                              if($('#boxx').attr('disabled')){
                                return false;
                              }
                              $.get('/phoneretrieveajax',{phone:phone},function(data){
                                    if(data.code==000000){ 
                                      // 按钮开始到计时
                                        m=60;
                                        mytimmer=setInterval(function(){
                                          m--;
                                          oo.html(m+'秒后重新发送');
                                          oo.attr('disabled',true);
                                          flag=true;
                                          if(m==0){
                                            clearInterval(mytimmer);
                                            oo.attr('disabled',false);
                                            oo.html('重新发送');
                                        }
                                      },1000);
                                    }

                              },'json');
                          });
                        // alert('dssfds');
                    }else{
                      $('#boxx').attr('disabled',true);
                      $(this).next('font').html('请输入确的手机号码').css('color','red');
                    }
                  });
                  $('#ff').submit(function(){
                    if(flag){
                      return true;
                    }else{
                      return false;
                    }
                  });
              </script>

@endsection
@section('title','短信找回密码')