﻿
<?php $__env->startSection('home'); ?>
<style>
  #tjbtn{
    background: #fed700;
    color: #333e48;
    display: inline-block;
    font-weight: 700;
    padding: 8px 16px;
    text-transform: uppercase;
  /*  border-radius: 50px;*/
    width: 115px;
    outline:none;
    overflow:visible;
  }
</style>
<div id="page">   
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="/">首页</a><span>&raquo;</span></li>
            <li><strong>收藏夹</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>我的收藏</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-delate">删除</th>
                    <th class="th-product">图片</th>
                    <th class="th-details">商品名称</th>
                    <th class="th-price">单价</th>
                    <th class="th-total th-add-to-cart">添加到购物车 </th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php if($num>0): ?>
                  <?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="th-delate"><a href="javascript:;" onclick="coldel(this,<?php echo e($value->id); ?>)">X</a></td>
                    <td class="th-product"><a href="#"><img src="<?php echo e(substr($value->path,1)); ?>" alt="cart"></a></td>
                    <td class="th-details" style="text-align:center"><h2><a href="#"><?php echo e($value->name); ?></a></h2></td>
                    <td class="th-price">$<?php echo e($value->price); ?></td>
                    <form action="/homeCart" method="post"> 
                    <input type="hidden" name="pic" value="<?php echo e(substr($value->path,1)); ?>">
                    <input type="hidden" name="price" value="<?php echo e($value->price); ?>">
                    <input type="hidden" name="sid" value="<?php echo e($value->id); ?>">
                    <input type="hidden" name="skuattr" value="<?php echo e($value->skuattr); ?>">
                    <th class="td-add-to-cart"><button id="tjbtn" type="submit">添加到购物车</button></th>
                    <?php echo e(csrf_field()); ?>

                    </form>  
                    
                  </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php else: ?>
                 <tr><th colspan="5">空空如也</th></tr>
                 <?php endif; ?>
                </tbody>
              </table>
               <?php if($num>0): ?><a href="checkout.html" class="all-cart">添加到购物车</a><?php endif; ?><a href="/" class="all-cart">返回首页</a></div>

          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                <li><a>Account Dashboard</a></li>
                <li><a href="#">Account Information</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li class="current"><a href="#">My Wishlist</a></li>
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="compare block">
            <div class="sidebar-bar-title">
              <h3>Compare Products (2)</h3>
            </div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="#" class="product-name">Vestibulum porta tristique porttitor.</a> </li>
                <li class="item"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="#" class="product-name">Lorem ipsum dolor sit amet</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"> <span><i class="fa fa-signal"></i> Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"> <span><i class="fa fa-eraser"></i> Clear All</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <?php echo e(csrf_field()); ?>

  </section>
   <script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
<script>
  function coldel(obj,id){
    var token = $('input[name="_token"]').val();
     $.ajax({
          type: 'POST',
          url: '/homeShopcoldel',
          data: {id:id,'_token':token},
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
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','我的收藏'); ?>

<?php echo $__env->make('public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>