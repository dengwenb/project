@extends('HomeLoginPublic')
@section('homelogin')
<!-- 邮箱登录 -->
              <div class="box-authentication" >
                <h4>重置密码</h4>
                
                <form action="/doemailpass" method="post" id="ff">
                {{csrf_field()}}
                <input type="hidden" value="{{$data->id}}" name="id">
                <label for="emmail_login">重置密码的账户:<span class="required">*</span></label>
                <input id="emmail_login" type="email" required class="form-control" name="email" value="{{$data->email}}" disabled>
                 <label for="emmail_login">新密码:<span class="required">*</span></label>
                <input id="emmail_login" type="password" required class="form-control" name="password" value="" placeholder="密码由字母个数字组合6~20位"><span></span><br/>
                 <label for="emmail_login">确认新密码:<span class="required">*</span></label>
                <input id="emmail_login" type="password" required class="form-control" name="passwords" value="" placeholder="确认新密码"><br/>
                <span ></span><br/>
                <input class="btn btn-success" type="submit" value="重置">
                </form>
              </div>
              <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
              <script>
              flag=false;
              flage=false;
                $("input[name='password']").blur(function(){
                  passs=$(this).val();
                  if(passs.match(/^[a-z A-Z][a-z 1-9 A-Z]{5,20}$/)){
                    $(this).next('span').html('√').css('color','green');
                   flag=true;
                  }else{
                    $(this).next('span').html('密码不安全重新输入').css('color','red');
                    flag=false;
                  }
                });
                $("input[name='passwords']").blur(function(){
                  pass=$(this).val();
                  if(pass== $("input[name='password']").val()){
                     $(this).next('br').next('span').html('√').css('color','green');
                     flage=true;
                  }else{
                    flage=false;
                    $(this).next().next('span').html('两次密码不一致').css('color','red');
                  }
                });
                $('#ff').submit(function(){
                  if(flag && flage){
                    return true;
                  }else{
                    return false;
                  }
                });
              </script>
@endsection
@section('title','重置密码')