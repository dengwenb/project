@extends("Home.Public.public")
@section("home")


 <!-- 注册 -->
 			<section class="main-container col1-layout">
    <div class="main container">
      
        
        <div class="page-content">
          
            <div class="account-login">
            	 <div class="box-authentication">
              <form action="/registercontroller" method="post" id="ff">
              {{csrf_field()}}
                <h4>手机注册</h4>                  
                <label for="emmail_register">输入你的手机号注册<span class="required">*</span></label>
                <input id="emmail_register" type="text" class="form-control "  holder="请输入11位手机号码" id="password_login" name="phone"><font></font><br/>
                 <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="passwords" holder="密码必须以字母开头数字组合 5-20位"><font></font><br/>
                 <label for="password_login">验证码:<span class="required">*</span><a class="btn btn-success" href="javascript:;" disabled id="boxx2" >发送验证码</a></label>
                <input  type="text" class="form-control" name="passwordss" holder="请输入验证码"><font></font><br/>
                 <label for="password_login"></label>
                 <input type="submit" id="boxx" value="注册" class="btn btn-success">
                <!-- <button class="button" id="boxx" type="submit"><i class="fa fa-user"></i>&nbsp; <span>注册</span></button> -->
                </form>
                <div class="register-benefits">
                        <h5>也可以使用以下方式注册 :</h5>
                        <ul>
                         <li><a href="/homeemail" style="color:red;">邮箱注册</a></li>
                        </ul>
                      </div>
              </div>
            </div>
        </div>
      </div>

    </div>
  </section>
             
              <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
			<script>
				  flag=false;
				  flage=false;
				  flages=false;
				  // 检测手机号
				  $('input').focus(function(){
				  	holder=$(this).attr('holder');
				  	$(this).next('font').html(holder).css('color','red');
				  });
				    $("input[name='phone']").blur(function(){
				        o=$(this);
				        phone=$(this).val();
				        var str=/^[\d]{11}$/;
				        if(str.test(phone)){
				                $.get('/homeloginphone',{phone:phone},function(data){
				                  // alert(data);
				                  if(data==1){
				                    o.next().html('手机号已经存在').css('color','red');
				                    $('#boxx2').attr('disabled',true);
				                    flag=false;
				                  }else{
				                    o.next().html('√').css('color','green');
				                    // $('#boxx2').attr('disabled',false);
				                    flag=true;
				                  }
				             });
				        }else{
				              o.next().html('手机不符合格式').css('color','red');
				               $('#boxx2').attr('disabled',true);
				               flag=false; 
				        }
				    });
				    //检测密码
				    $("input[name='passwords']").blur(function(){
				        oo=$(this);
				        pass=$(this).val();
				        strs=/^[a-zA-Z]+[a-z A-Z 0-9]{5,20}$/;
				        if(strs.test(pass)){
				         oo.next().html('√').css('color','green');
				          $('#boxx2').attr('disabled',false);
				          flage=true;
				        }else{
				         oo.next().html('密码不符合格式').css('color','red');
				          $('#boxx2').attr('disabled',true);
				          flage=false;
				        }
				    });
				    //点击发送验证码按钮
				    $('#boxx2').click(function(){
				    
				      if($('#boxx2').attr('disabled')){
				      	return true;
				      }
				      ooo=$(this);
				      phone=$("input[name='phone']").val();
				       
				      $.get('/homephone',{phones:phone},function(data){
				          alert(data.code);
				          if(data.code==000000){
				            m=60;
				            mytimmer=setInterval(function(){
				              m--;
				              ooo.html(m+'秒后后重新发送');
				              ooo.attr('disabled',true);
				              if(m==0){
				                clearInterval(mytimmer);
				                ooo.html('重新发送');
				                ooo.attr('disabled',false);
				              }
				            },1000);
				          }
				      },'json');
				    });
				    //验证码验证
				    $("input[name='passwordss']").blur(function(){
				      oooo=$(this);
				      code=oooo.val();
				      $.get('/homecode',{code:code},function(data){
				          // alert(data);
				          if(data==1){
				            oooo.next().html('√').css('color','green');
				            flages=true;
				          }else if(data==2){
				            oooo.next().html('校验码不一致').css('color','red');
				           flages=false;
				          }else if(data==3){
				            oooo.next().html('校验码不能为空').css('color','red');
				           flages=false;
				          }else{
				            oooo.next().html('请获取校验码').css('color','red');
				            flages=false;
				          }
				      });
				    });
    // 格式不对阻止提交
    $('#ff').submit(function(){
    	$('input').trigger('focus');
     	if(flag && flage && flages){
      		// alert('true');
      		return true;
  		}else{
  			// return false;
  			// alert('false');
  			// alert(flag);
  			// alert(flage);
  			// alert(flages);
  			return false;
  		}
    });
  </script>
@endsection
@section('tilte','注册')