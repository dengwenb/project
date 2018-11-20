  <!-- 邮箱登录 -->
              <div class="box-authentication" id="youxiang" style="display:none;">
                <h4>邮箱登录</h4>
                <form action="" method="post">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎使用邮箱登录到您的帐户</p>
                <label for="emmail_login">邮箱地址:<span class="required">*</span></label>
                <input id="emmail_login" type="email" class="form-control" name="email" value="" placeholder="请输入邮箱地址">
                <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="emailpass" placeholder="请输入密码">
                <label for="password_login">输入验证码:<span class="required">*</span></label>
                <input type="text" name="yanzhenma" class="form-control" placeholder="输入验证码" style="width:100px;">
              
                <input class="btn btn-success" type="submit" value="登录">
                </form>
              </div>




               <!-- 手机号登录 -->
              <div class="box-authentication" id="duanxin" style="display:none;">
                <h4>短信登录</h4>
                <form action="" method="post">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎使用短信登录到您的帐户</p>
                <label for="emmail_login">邮箱地址:<span class="required">*</span></label>
                <input id="emmail_login" type="email" class="form-control" name="email" value="" placeholder="请输入邮箱地址"><font color="red" id="font1"></font><br/>
                <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="emailpass" placeholder="请输入密码"><font color="red" id="font2"></font><br/>
                <p class="forgot-pass"><a href="#">密码丢失了？ </a><a>用户名登录</a></p>
                <input class="btn btn-success" type="submit" value="登录">
                </form>
              </div>


               <!-- 用户名登录 -->
              <div class="box-authentication" id="denglu" >
                <h4>登录</h4>
                <form action="/logincontroller" method="post">
                {{csrf_field()}}
               <p class="before-login-text" id="box">欢迎回来！登录到您的帐户</p>
                <label for="emmail_login">用户名:<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="请输入用户名"><font color="red" id="font1">@if(session('user')) {{session('user')}} @endif</font><br/>
                <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="password" placeholder="请输入密码"><font color="red" id="font2">@if(session('pass')) {{session('pass')}} @endif </font><br/>
                <p class="forgot-pass"><a href="#">密码丢失了？ </a><a href="#" style="color:red;" id="you">邮箱登录</a>　<a href="#" style="color:red;" >短信登录</a>　<a  id="zhu" href="#">注册</a></p>
                <input class="btn btn-success" type="submit" value="登录"><label class="inline" for="rememberme"></label>
                </form>
              </div>


               <!-- 注册 -->
              <div class="box-authentication" id="zhuce" style="display:none;">
              <form action="/registercontroller" method="post" id="ff">
              {{csrf_field()}}
                <h4>注册</h4>                     
                <label for="emmail_register">输入你的手机号注册<span class="required">*</span></label>
                <input id="emmail_register" type="text" class="form-control "  placeholder="请输入手机号码" id="password_login" name="phone"><font></font><br/>
                 <label for="password_login">密码:<span class="required">*</span></label>
                <input  type="password" class="form-control" name="passwords" placeholder="密码由字母和数字组合 5-20位"><font></font><br/>
                 <label for="password_login">验证码:<span class="required">*</span><a class="btn btn-success" href="javascript:;" disabled id="box2" >发送验证码</a></label>
                <input  type="text" class="form-control" name="passwordss" placeholder="请输入验证码"><font></font><br/>
                 <label for="password_login"></label>
                 <input type="submit" id="boxx" value="注册" class="btn btn-success">
                <!-- <button class="button" id="boxx" type="submit"><i class="fa fa-user"></i>&nbsp; <span>注册</span></button> -->
                </form>
                <div class="register-benefits">
                        <h5>今天注册，你就可以 :</h5>
                        <ul>
                          <li>加快结帐速度</li>
                          <li>容易跟踪你的订单</li>
                          <li>记录下你所有的购买物品</li>
                          <li>已有账号？去<font size="5px" color="orange" id="deng">登录</font>购物</li>
                        </ul>
                      </div>
              </div>


               <script>
  
 