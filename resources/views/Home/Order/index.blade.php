


<head>
<title>确认订单</title>
<link href="static/home/order/css/public.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/home/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="static/home/order/css/base.css"/>
      
        <link rel="stylesheet" type="text/css" href="static/home/order/css/checkOut.css" />
    <script src="/static/home/js/jquery.min.js"></script>
    <script src="/static/home/js/bootstrap.min.js"></script>
    <script src="/static/home/js/holder.min.js"></script>
    <script src="/static/home/js/jquery-1.7.2.min.js"></script>
  

    
</head>
<style>
   #dis{position:absolute;left:25%;top:1%;z-index:999;} 

</style>
<body>
<header>   
 <!--收货地址body部分开始-->  
  <button class="btn btn-success" data-toggle="modal" data-target="#mymodal" type="button" id="dis">添加收货地址</button>
                <div class="modal fade" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- 这是模态框的头 -->
                        <div class="modal-header">
                        <!-- 关闭modal框的 data-dismiss -->
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h3>添加收货地址</h3>
                        </div>
                        <div class="modal-body">
                            <form action="/homeOrder" method="post">
                                <div class="form-group">
                                    <label>收货人:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>电话:</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label>地址:</label>
                                    <input type="hidden" name="city">
                                    <select name="" id="sid">
                                        <option value="" class="ss">--请选择--</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>详细地址:</label>
                                    <input type="text" name="remarks">
                                    
                                </div>

                                {{ csrf_field() }}
                                <input type="submit" value="提交" class="btn btn-success" id="submit">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn  btn-info" data-dismiss="modal">关闭</button>
                        </div>
                    </div>

                </div>
            </div>


<div class="container">
    <div class="checkout-box">
        
          <form   action="/Pay" method="post">
            <div class="checkout-box-bd">
                    <!-- 地址状态 0：默认选择；1：新增地址；2：修改地址 -->
               
                <!-- 收货地址 -->
                <div class="xm-box">
                    <div class="box-hd ">
    <h2 class="title">收货地址</h2>
    <!---->
</div>
<div class="box-bd">
    @foreach ($dz as $key=>$value)
<label><input name="address_id" type="radio" value="{{$value->id}}" @if($key==0) checked @endif />{{$value->address}} （{{$value->code}}） &nbsp &nbsp{{$value->name}}收 &nbsp &nbsp电话 &nbsp &nbsp{{$value->phone}}</label> 

<br>
            @endforeach
           
      
    <!--点击弹出新增/收货地址界面start-->
              </div>
                <!-- 收货地址 END-->
                <div id="checkoutPayment">
                    
            <!-- 支付方式 END-->
            <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">配送方式</h2>
                </div>
               
                <div class="box-bd" >
                    <ul id="checkoutShipmentList" class="checkout-option-list clearfix J_optionList">
                   
                                                <li class="item ">
                            <input type="radio" data-price="0" name="postage"  >
                            <p>
                             商家包邮哦
                            </p>
                        </li>
                        
                                            </ul>
                </div>
               
            </div>
              <div class="xm-box">
                 <div class="box-hd">
                        <h2 class="title">我的优惠券</h2>
                    </div>
                    <div class="box-bd">
                        <ul class="checkout-option-list clearfix J_optionList">
                        @foreach ($coupon as $key=>$value)
                        @if(date('Y-m-d', time())>$value->start_time && date('Y-m-d', time())<$value->stop_time )
                    
                            <li class="item "  onclick="func1(this,{{$value->c_pri}},{{$value->coupon_id}})">
                            <p>满￥ <font> {{$value->min_pri}}</font>减<span>{{$value->c_pri}}</span></p></li>
                            
                       @endif
                        @endforeach                        
                        </ul>
                    </div>
            </div>
            <!-- 配送方式 END-->                    <!-- 配送方式 END-->
                </div>
            
            
                
            </div>
            <div class="checkout-box-ft">
                 <!-- 商品清单 -->
                <div id="checkoutGoodsList" class="checkout-goods-box">
                                    <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">确认订单信息</h2>
                    </div>
                    <div class="box-bd">
                        <dl class="checkout-goods-list">
                            <dt class="clearfix">
                                <span class="col col-1">商品名称</span>
                                <span class="col col-2">购买价格</span>
                                <span class="col col-3">购买数量</span>
                                <span class="col col-4">小计（元）</span>
                            </dt>
                                                        <dd class="item clearfix">
                                @foreach ($shop as $key=>$value)
                                <div class="item-row">
                                    <div class="col col-1" >
                                        <div class="g-pic">
                                            <img src="{{$value->path}}"  width="150" height="100" />
                                        </div>
                                        <div class="g-info">
                                                                                          <a href="#">
                                               {{$value->name}}                                            </a>
                                                                                                                                </div>
                                    </div>
                
                                    <input type="hidden" value="{{session('cart')[$key]['num']}}" name ="num">
                                    <!-- <input type="hidden" value="{{session('cart')[$key]['price']}}" name ="num"> -->

                                    <div class="col col-2" >{{session('cart')[$key]['price']}}元</div>
                                    <div class="col col-3"style="position:relative">{{session('cart')[$key]['num']}}<div>
                                    <div class="col col-4" style="position:absolute;left:35px;top:70px;">{{session('cart')[$key]['price'] *session('cart')[$key]['num']}}元</div>
                                </div>
                                @if($total = 0) @endif
                                <input type="hidden" value="{{$total += session('cart')[$key]['price'] *session('cart')[$key]['num']}}" name="total">
                               <input type="hidden" value="{{$value->sid}}" name="sid">
                               <input type="hidden" value="{{session('cart')[$key]['price']}}" name="price">
                                @endforeach
                            </dd>
                                                                             
                                                    </dl>
                        <div class="checkout-count clearfix">
                            <div class="checkout-count-extend xm-add-buy">
                                <h3 class="title">会员留言</h2></br>
                                <input type="text" />

                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>

                                    <li>
                                       订单总额：<span>{{$total}}元</span>
                                    </li>
                                    
                                    <li>
                                        优惠券抵扣：<span id="couponDesc"><font class="font1">0</font></span>
                                    </li>
                                    <li>
                                        运费：<span id="postageDesc"><font class="font2">0</font>元</span>
                                    </li>
                                </ul>

                                <p class="checkout-total">应付总额：<span><strong id="totalPrice" class="total font4">{{$total}}</strong>元</span></p>
                                <span></span>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>

    
    <!--S 保障计划 产品选择弹框 -->
            
    
                </div>
                <!-- 商品清单 END -->
               
                <div class="checkout-confirm">
                     {{ csrf_field() }}
                    
                     <a href="/" class="btn btn-lineDakeLight btn-back-cart">返回购物车</a>
                     <input type="submit" class="btn btn-primary" value="立即下单" />
                                     </div>
            </div>
        </div>

    </form>

</div>


</body>
<script>
    t={{$total}};
  function func1 (obj,pri,id){
            var $id=id;
            var $pri=pri;
            a=$(obj).children('p').children('span').html();
            b=$(obj).children('p').children('font').html();
            if ({{$total}}<b) {
                    alert('优惠券不能使用哦');
                    return false;
            }else{
                    $('.font1').html(a+'元');
                   c=Number(t)-Number(a);
                   b=c.toFixed(0);
                    $('.total').html(b);
                    //添加隐藏框传值
                    input1=$('<input name="coupon_id" value='+$id+' type="hidden"/>');
                    input2=$('<input name="c_pri" value='+$pri+' type="hidden"/>')
                    var s=$('.total').parent().parent().next('span');  
                    s.append(input1);
                    s.append(input2);
            }
              //点击选中
              if(!$(obj).hasClass("selected")){
                    $(obj).addClass("selected").siblings().removeClass('selected');
                    $(obj).children().attr('checked',true);
                 }else{
                    $(obj).removeClass("selected");
                    $('.total').html(t);
                    //删除隐藏框
                    $('.total').parent().parent().next('span').remove('input');
            }
            
          
  

    }
   
</script>
<script>
    //第一级别获取
    $.get('/homeorderget',{upid:0},function(result){
        // alert(result);
        $('.ss').attr('disabled','true');
        //得到的是数组对象 我们要遍历得里面的每个对象
        for(var i=0;i<result.length;i++){
            // console.log(result[i].name);
            var info=$('<option value="'+result[i].id+'">'+result[i].name+'</option>');
            $('#sid').append(info);
        }
    },'json');

    // 其他级别内容
    // live事件委派 
    $('select').live('change',function(){
        //将当前的对象存储起来
        obj=$(this);
        //通过id来查找下一个
        id=$(this).val();
        obj.nextAll('select').remove();
        $.getJSON('/homeorderget',{upid:id},function(result){
            if(result !=''){
                //创建一个select标签对象
                var select=$('<select></select>');
                //防止当前城市没有办法选择所以我们先写上一个请选择
                var op=$('<option class="mm">--请选择--</option>');
                select.append(op);


                //循环得到数组里面option标签添加到select里面
                for(var i=0;i<result.length;i++){
                    //创建option标签
                    var info=$('<option value="'+result[i].id+'">'+result[i].name+'</option>');
                    // 将option标签添加到select里面
                    select.append(info);
                }
                //将select标签添加到当前标签的后面
                obj.after(select);



                //把其他级别的请选择禁用
                $('.mm').attr('disabled','true');
            }
        })
    })
    //提交到某个页面
    $('#submit').click(function(){
        // 先声明一个数组
        arr=[];
        console.log($('select'));
        //手动循环得到每个选中的数据
        $('select').each(function(){
            opdata=$(this).find('option:selected').html();
            // 将我们每个值添加到数组中push();
            arr.push(opdata);
        })
        //将得到的值直接赋值给隐藏域中的val
        $('input[name=city]').val(arr);
    })
</script>
   @if(session('success'))
   <script>
        alert('添加成功');
   </script>
   @endif
   
</html>


       
