@extends('HomeLoginPublic')
@section('homelogin')
  <!-- 手机号登录 -->
              <div class="box-authentication">
                <h4>重置密码</h4>
                <form action="/dophoneretrieves" method="post" id="ff">
                <input type="hidden" name="token" value="{{$data->_token}}">
                <input type="hidden" name="id" value="{{$data->id}}">
                {{csrf_field()}}
                <label for="emmail_login">正在为此账号找回密码:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="phone" value="{{$data->phone}}" disabled>
                 <label for="emmail_login">新密码:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="password" value="" placeholder="密码由字母数字组合5~20位">
                 <label for="emmail_login">确认新密码:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="passwords" value="" placeholder="确认新密码"><br/><span></span><br/>
                <input class="btn btn-success" type="submit" value="找回">
                </form>
              </div>
               <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
              <script>
              flag=false;

                $("input[name='passwords']").blur(function(){
                  password=$("input[name='password']").val();
                  if($(this).val()==password){
                    $(this).next('br').next('span').html('√').css('color','green');
                    flag=true;
                  }else{
                    $(this).next('br').next('span').html('两次输入的密码不一致').css('color','red');
                    flag=false;
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
@section('title','重置密码')