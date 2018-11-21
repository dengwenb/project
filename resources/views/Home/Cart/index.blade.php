@extends('public')
@section('home')
<style>
  th{
    text-align:center;
  }
</style>
  <div class="alert alert-success">
    <div class="Huialert Huialert-success">
      <button type="button" class="close  btn-info" data-dismiss="alert" aria-label="Close" style="width:100%;color:black;opacity:1;font-family: 宋体;font-weight: bold" style="margin-bottom:1px;position: relative;">{{session('success')}}
      </button>
    </div>
  </div>

  @if (session('error'))
  <div class="alert alert-danger">
    <div class="Huialert Huialert-danger">
      <button type="button" class="close  btn-info" data-dismiss="alert" aria-label="Close" style="width:100%;color:black;opacity:1;font-family: 宋体;font-weight: bold" style="margin-bottom:1px;position: relative;">{{session('error')}}
      </button>
    </div>
  </div>
  @endif
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr style="text-align:center">
                      <th class="cart_product">商品</th>
                      <th>描述</th>
                      <th>状态</th>
                      <th>单价</th>
                      <th>数量</th>
                      <th>共计</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty(session('cart')))
                    @foreach(session('cart') as $key=>$value)
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{$value['pic']}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">{{$data[$value['sid']]->name}}</a></p>
                        @foreach($value['skuattr'] as $key=>$val )
                        <small><a href="#">{{$att[$key]}}: {{$vvv[$val]}}</a></small><br>
                        @endforeach
                      <td class="availability in-stock"><span class="label">量 足</span></td>
                      <td class="price">￥<span>{{$value['price']}}</span></td>
                      <td class="qty" style="width:150px">
                        <div class="row">
                           <div class="col-lg-6">
                             <div class="input-group">
                               <span class="input-group-btn">
                                 <button class="btn btn-default" type="button" onClick="jia(this,{{$value['distant']}},{{$value['sid']}},'-')">-</button>
                               </span>
                               <input type="text" class="form-control" value="{{$value['num']}}" style="width:90px">
                               <span class="input-group-btn">
                                 <button class="btn btn-default" type="button" onClick="jia(this,{{$value['distant']}},{{$value['sid']}},'+')">+</button>
                               </span>
                             </div>
                           </div>
                          </div>
                        </td>
                      <td class="price count">￥<span>{{$value['num']*$value['price']}}</span></td>
                      <td class="action"><a href="javascript:;" onClick="cartdel(this,{{$value['distant']}},{{$value['sid']}})" ><i class="icon-close"></i></a></td>
                    </tr>
                    <input type="hidden" name="totalprice" value="{{$total += $value['num'] * $value['price']}}">
                    @endforeach
                     </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">总价 (含税.)</td>
                      <td colspan="2">$<span class="total">{{$total}}</span></td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>总价</strong></td>
                      <td colspan="2"><strong>$<span class="total">{{$total}}</span></strong></td>
                    </tr>
                  </tfoot>
                    @else
                    <tr>
                      <td class="cart_product" colspan="7" style="text-align:center;height:100px">购物车空空如也</td>
                     
                    </tr>
                    @endif      
                 
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="/homeShop"><i class="fa fa-arrow-left"> </i>&nbsp; 继续购物</a> <a class="checkout-btn" href="/homeOrder"><i class="fa fa-check"></i>结算</a> </div>
            </div>
          </div>
        </div>
      </div>
      {{csrf_field()}}
       {{method_field('DELETE')}}
       {{method_field('PUT')}}
    </div>
  </section>
 <script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
 <script>
  function cartdel(obj,distant,id)
  {
      var token = $('input[name="_token"]').val();
      var method = $('input[value="DELETE"]').val();
        $.ajax({
          type: 'POST',
          url: '/homeCart/'+id,
          data: {distant:distant,id:id,'_token':token,'_method':method},
          dataType: 'json',
          success: function(data){
            if(data.result==1){
              $(obj).parents("tr").remove();
              alert(data.msg);
            }else{
              alert(data.msg);
            }     
          },
          error:function(data) {
            console.log(data.msg);
          },
        });   
  }   

  function jia(obj,distant,id,suanfa){
       var token = $('input[name="_token"]').val();
       var method = $('input[value="PUT"]').val();
       var price =  $(obj).parents('td').prev().find('span').html();
       $.ajax({
          type: 'POST',
          url: '/homeCart/'+id,
          data: {distant:distant,id:id,suanfa:suanfa,'_token':token,'_method':method},
          dataType: 'json',
          success: function(data){
            if(data.result==1){ 
              var heji = parseFloat(data.msg)*parseFloat(price);
              if(suanfa=='+'){
                  $(obj).parents('span').prev().val(data.msg);
                 
              }else{
                  $(obj).parents('span').next().val(data.msg);

              }
              $(obj).parents('td').next().find('span').html(heji);
              count = 0;
              $('td.count').each(function(){
                count += parseFloat($(this).find('span').html());
              });
              $('strong.strnum').html(data.msg);
              $('span.attpri').html('$'+count);
              $('span.total').html(count);
            }else{
              alert(data.msg);
            }     
          },
          error:function(data) {
            console.log(data.msg);
          },
        });   
  }

  function jian(obj,distant,id){

  }
 </script>
  @endsection
@section('title','购物车')