@extends("Home.Public.public")
@section("home")



  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>我的订单详情</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th>订单编号</th>
                      <th class="cart_product">商品图片</th>
                
                      <th>商品信息</th>
                     
                      <th>单价</th>
                      <th>数量</th>
                      <th>付款</th>
                      <th  class="action">交易状态</th>
                      <th>操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>1</td>
                      <td class="cart_product"><a href="#"><img src="static/home/images/products/img01.jpg" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                        <small><a href="#">Color : Red</a></small><br>
                        <small><a href="#">Size : M</a></small></td>
                      <td class="availability in-stock"><span class="label">50￥</span></td>
                      <td class="qty"><span>1</span></td>
                      <td class="price">100￥</td>
                      <td class="price"><span>已付款</span></td>
                      <td class="action"><a href="#">查看订单详情｜</a></td>
                    </tr>
                 
                  </tbody>
                  
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left"> </i>&nbsp; 返回首页</a> <a class="checkout-btn" href="#"><i class="fa fa-check"></i> 去购物车</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection
@section('title','订单详情') 