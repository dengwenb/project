@extends('Home.Public.userinfopublic')
@section('content')
<h3>
	                        <strong style=" font-size: 14px;">收货地址修改</strong>
	                    </h3>
						<div class="user-profile clearfix" style="margin-left: 0px;width: 100%;border: 0px;">
						<form method="post" action="/myaddress/{{$data->id}}" id="ff">
						{{csrf_field()}}
						{{method_field('PUT')}}
							<div class="user-profile-wrap" style="width: 100%;height: 500px;" >
								<p style="margin-left: 70px;font-size: 14px;"><span style="color:#F88600;font-size: 14px;">收货地址修改</span> </p>
							<div style="margin-left: 70px;margin-top: 30px;height: 30px;" >
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">所在地区:</span>
								<input type="text" style="padding: 5px;width: 300px;margin-left: 14px;" value="{{$data->address}}" disabled><a href="javascript:void(0)" id="xiu" style="color:orange;font-size:16px;" >修改</a>
								<span style="display:none;" id="box">
								<select style="padding:5px;margin-left: 14px;" id="sid" > 
									<option selected="" id="ss">--请选择--</option>
								</select>
								</span>
								
							</div>
							<input type="hidden" name="address">
							<div style="margin-left: 70px;margin-top: 50px;">
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">详细地址:</span>
							</div>
							<div style="margin-left: 150px;margin-top:-40px;">
								<textarea style="width:500px;height: 90px;padding: 5px;" placeholder="建议您如实填写详细收货地址，例如街道 名称，门牌号码，楼层和房间号等信息" name="xiangxi" >{{$data->xiangxi}}</textarea>
							</div>
							<input type="hidden" name="userid" value="{{session('id')}}">
							<div style="margin-left: 80px;margin-top: 20px;">
								<span class="titles">邮政编号:</span>
								<input type="text" placeholder="如您不清楚地区邮递号，请填写000000" style="padding: 5px;width: 300px;margin-left: 14px;" name="code" value="{{$data->code}}">
							</div>
							
							<div style="margin-left: 55px;margin-top: 30px;">
								<span style="color: #F2873B;">*</span>
								<span class="titles">收货人姓名:</span>
								<input type="text" placeholder="长度不超过25个字符" style="padding: 5px;width: 300px;margin-left: 14px;" name="name" value="{{$data->name}}" > 
							</div>
							<div style="margin-left: 80px;margin-top: 30px;">
								<span class="titles">手机号码:</span>
								
								&nbsp;<input type="text" placeholder="电话号码、手机号码必须填一项" style="padding: 5px;width: 200px;" name="phone" value="{{$data->phone}}">
							</div>
							
							<div style="margin-left: 150px;margin-top: 10px;">
								
								<div class="am-u-sm-7 am-u-sm-offset-3" style="padding-right: 0rem;"> 
									<label class="checkbox-pretty inline ">
										<input type="checkbox"  name="checked" @if($data->checked == 'no') checked @endif>
										<span style="font-size: 12px;color: #878787;">
											<font style="font-size: 12px;color: #333333;">设为默认地址</font>
										</span> </label> </div>
							
							</div>
							
							<button type="submit" style="margin-left:150px;margin-top:10px;background-color:#F37B1D ;color: #fff;width: 100px;height: 30px;border: 0px;border-radius: 5px;">修改</button>
							</div>
							
						</div>
					</div>
					<script src="/static/Home/jquery-1.7.2.min.js"></script>
					<script>
					
					$('#xiu').click(function(){
						$('#box').show();
						$(this).hide().prev().hide();
					});
					flag5=false;
					flag2=false;
					flag3=false;
					flag4=false;
					
							//第一级别获取
					$.get('/infoaddress',{upid:0},function (result){
						//禁止请选择选中
						 //alert(result);
						$('#ss').attr('disabled','true');
							
						//得到的是数组内容 我们要遍历得到里面的每一个对象
						for(var i=0;i<result.length;i++){
							//console.log(result[i].name);
							var info=$('<option value="'+result[i].id+'">'+result[i].name+'</option>');
							$('#sid').append(info);
						}
					},'json');

					//其他级别内容
					// live 事件委派  他可以帮助我们将动态内容生成的内容只要选择器相同就可以有相同的事件
					$('select').live('change',function(){
						//将当前的对象存储起来
						obj=$(this);
						//通过id来查找下一个
						id=$(this).val();
						//清除其它的select
						obj.nextAll('select').remove();
						$.getJSON('/infoaddress',{upid:id},function(result){
							if(result !=''){
							//创建一个select标签对象
							var select=$('<select style="padding:5px;margin-left: 14px;"></select>');
							//防止当前城市没有办法选择所以我们先写上一个请选择
							var op=$('<option class="mm">--请选择--</option>');
							//将新创建的option里面
							select.append(op);

							//循环得到数组里面的option标签添加到select里面
							for(var i=0;i<result.length;i++){
								//创建option标签
								var info=$('<option value="'+result[i].id+'">'+result[i].name+'</option>');
								// 将option标签添加到select里面
								select.append(info);

							}
							//将select标签添加到当前标签的后面
							obj.after(select);


							//把其它级别的请选择禁用
							$('.mm').attr('disabled','true');
						}
						})
					})

					//提交到某个页面
					$('button').click(function(){
						//先声明一个数组
						arr=[];
						//手动循环得的每个选中的数据
						$('select').each(function(){
							opdata=$(this).find('option:selected').html();
							// alert(opdata);
							//将我们得到的每个值放置到数组中 push() 将数值添加到数组中
							arr.push(opdata);
							if(arr=='--请选择--'){
								arr='{{$data->address}}';
							}
						})
						// console.log(arr);
						// 将得到的值数组直接接赋值给隐藏域中的value值即可
						$('input[name=address]').val(arr);
						
					});
					//详细地址
					$("textarea[name='xiangxi']").blur(function(){
						xiangxi=$(this).val();
						if(xiangxi.match(/^\S[a-zA-Z\s\d\u4e00-\u9fa5]{4,50}$/)){
							$(this).css('border','solid 1px green');
							flag2=true;
						}else{
							$(this).css('border','solid 1px red');
							flag2=false;
						}
					});

					// 邮编
					$("input[name='code']").blur(function(){
						code=$(this).val();
						if(code.match(/^[\d]{6}$/)){
							$(this).css('border','solid 1px green');
							flag3=true;
						}else{
							$(this).css('border','solid 1px red');
							flag3=false;
						}
					});

					//收货人
					$("input[name='name']").blur(function(){
						name=$(this).val();
						if(name.match(/^[\u4e00-\u9fa5]{2,10}$/)){
							$(this).css('border','solid 1px green');
							flag4=true;
						}else{
							$(this).css('border','solid 1px red');
							flag4=false;
						}
					});
					
					//手机验证
					$("input[name='phone']").blur(function(){
						phone=$(this).val();
						if(phone.match(/^[\d]{11}$/)){
							$(this).css('border','solid 1px green');
							flag5=true;
						}else{
							$(this).css('border','solid 1px red');
							flag5=false;
						}
					});

					// 没有选择禁止提交
					$("button").click(function(){
						$('input').focus();
						$('textarea').focus();
					});
					$('#ff').submit(function(){
						$('input').focus();
						$('textarea').focus();
						if(flag2 && flag3 && flag4 && flag5){
							return true;
						}else{
							alert('请认真填写');
							return false;
							
						}
					});	
					</script>
@endsection
@section('title','地址修改')