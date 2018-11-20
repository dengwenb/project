<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>可自由切换的注册登录表单模板</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/static/Admin/login/css/normalize.min.css">

  
      <link rel="stylesheet" href="/static/Admin/login/css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">注册</a></li>
        <li class="tab"><a href="#login">登录</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>免费注册</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                用户民<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                姓<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              电子邮箱<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              设置密码<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>开始创建</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>欢迎来到</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              电子邮箱<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              密码<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">找回密码?</a></p>
          
          <button class="button button-block"/>登录</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='/static/Admin/login/js/jquery.min.js'></script>

    <script  src="/static/Admin/login/js/index.js"></script>

</body>
</html>
