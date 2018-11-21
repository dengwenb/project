@extends('Home.Public.userinfopublic')
@section('content')

  <h3> <strong>个人信息</strong> </h3> 
  <form action="" method="post" action="/myinformation" enctype="multipart/form-data">
  <div class="user-profile clearfix"> 
   <div class="user-profile-wrap"> 
    <div class="profile-avatar"> 
     <img src="" width="120" height="120" /> 
     <div class="edit_bg"></div> 

    </div> 
   </div> 
   {{csrf_field()}}
   <div class="profile-info"> 
    <div class="control-group clearfix "> 
     <div class="controls lh26"> 
      <label class="control-label"><em>*</em><span style="margin-left: 10px;">用户名:</span> 
      <input style="margin-left: 10px;" type="text" class="text" name="user" value=""/>  </label>
     </div> 
     <div style="margin-left: 76px;margin-top: 40px;position: absolute;"> 
      <img src="/static/Home/UserInfo/img/zcgy.png" />
      <span style="margin-left: 10px;font-size: 12px;color: #333333;">注册会员</span> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="form-list tab-switch personal-wrap-show"> 
	
	<div class="control-group clearfix"> 
     <label class="control-label"><em>*&nbsp;</em>选择新头像：</label> 
     
      <input type="file" class="text"  name="pic" /> 
    
    </div> 

    <div class="control-group clearfix"> 
     <label class="control-label"><em>*&nbsp;</em>真实姓名：</label> 
     <div class="controls"> 
      <input type="text" class="text" maxlength="12" value="" name="username"/> 
     </div> 
    </div> 
   
    <div class="control-group clearfix"> 
     <label class="control-label"><em>*&nbsp;</em>性别：</label> 
     <div id="gender" class="controls"> 
      <label class="sex-label"> <input type="radio" name="sex" value="1"/> <span>男</span> </label> 
      <label class="sex-label"> <input type="radio" name="sex" value="2"/> <span>女</span> </label> 
      <label class="sex-label"> <input type="radio" name="sex" value="3"/> <span>保密</span> </label> 
     </div> 
    </div> 
  	<div class="control-group clearfix"> 
     <label class="control-label">手机号：</label> 
     <input type="hidden"  value="{{session('id')}}" name="id"/> 
     <div class="controls"> 
      <input  type="text" class="text" maxlength="20" name="phone" value=""/> 
     </div> 
     <div id="" class="error-place"> 
     </div> 
    </div> 
	<div class="control-group clearfix"> 
     <label class="control-label">邮箱：</label> 
     
     <div class="controls"> 
      <input id="" type="text" class="text" maxlength="20" name="email" value=""/> 
     </div> 
     <div id="" class="error-place"> 
     </div> 
    </div> 
	
  
    <div class="control-group clearfix priority-high"> 
     <label class="control-label"><em>*&nbsp;</em>居住地址：</label> 
     <input type="hidden" name="city">
     <div class="controls"> 
      <select  id="sid">
      	<option value="" class="ss">--请选择--</option>
      </select>
     
      <p class="adress-detail"> <input type="text" class="text" maxlength="30" value="高新区" name="address"/> <span class="tips-words"></span> </p> 
      <div id="" class="error-place ml0"> 
      </div> 
     </div> 
    </div> 
   
    <div class="control-group clearfix priority-low"> 
     <label class="control-label">&nbsp;</label> 
     <div style="float:left;"> 
      <button class="ms-stand-btn1"  type="submit">保存</button> 
     </div> 
     <div id="" class="error-place"></div> 
     <div class="error-place mt29"></div> 
    </div> 
   </form> 
  </div> 
 <script src="/static/Home/jquery-1.7.2.min.js"></script>
  <script>

  	$.get('/infoaddress',{upid:0},function(data){
  		$('.ss').attr('disabled',true);
  		// alert(data);/
  		//得到的是数组内容我们要遍历得到里面的每一个对象
  		for(var i=0;i<data.length;i++){
  			// console.log(data[i].name);
  			var info=$('<option value="'+data[i].id+'">'+data[i].name+'</option>');
  			$('#sid').append(info);
  		}
  	},'json');
  	//其它级别
  	// live事件委派
  	$('select').live('change',function(){
  		// 将当前的对象存储起来
  		obj=$(this);
  		//通过id来查找下一个
  		id=$(this).val();
  		// 清除其他的select
  		obj.nextAll('select').remove();
  		$.get('/infoaddress',{upid:id},function(data){
  			if(data !=''){
  				//创建一个select标签对象
  				var select=$('<select></select>');
  				//防止当前城市没有办法
  				var op =$('<option class="mm">--请选择--</option>');
  				//将创建的option里面
  				select.append(op);
  				//循环得到数组里面的option标签添加到select里面
  				for(var i=0;i<data.length;i++){
  					//创建option标签
  					var info=$('<option value="'+data[i].id+'">'+data[i].name+'</option>');
  					// 将option标签添加到当前标签的后面
  					select.append(info);
  				}
  				//将select 标签添加到当前标签的后面
  				obj.after(select);

  				// 把其他级别的请选择禁用
  				$('.mm').attr('disabled',true);
  			}
  		});
  	});
  	// 提交到某个页面
  	$('button').click(function(){
  		// 先声明一个数组
  		arr=[];
  		console.log($('select'));
  		//手动循环得到的某个选中的数据
  		$('select').each(function(){
  			opdata=$(this).find('option:selected').html();
  			// 将数值添加到数组中
  			arr.push(opdata);
  		})
  		$("input[name='city']").val(arr);
  	});
  </script>
						
@endsection
@section('title','我的资料')