@extends('public')
@section('home')
<div id="newsletter-popup-conatiner">
    <div id="newsletter-pop-up"> <span class="hide-popup">X</span>
      <div class="subscribe-pop-up">
        <div class="title-subscribe">
          <h1>通知</h1>
        </div>
        <form id="newsletter-form" method="post" action="#">
          <div class="content-subscribe">
            <div class="form-subscribe-header">
              <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
            </div>
            <div class="input-box">
              <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
            </div>
            <div class="actions">
              <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
        <div class="subscribe-bottom">
          <input name="notshowpopup" id="notshowpopup" type="checkbox">
          Don’t show this popup again </div>
      </div>
    </div>
  </div>
  <!-- 轮播图开始 -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
         @foreach ($lunbotu as $value) 
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{substr($value->path,1)}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption white_heavy_60 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="140" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1200"
                          data-start="700"
                          data-easing="Power4.easeOut"
                          data-splitin="chars"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style=" font-size:70px; font-weight:800; color:pink;">{{$value->content}} </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="220" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                          data-speed="1500"
                          data-start="1000"
                          data-easing="Power4.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">精彩 </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb ltb start tp-resizeme"
                          data-x="310"
                          data-y="270"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="1600"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='largebtn solid'>立即 获取!</a> </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <!-- 轮播图结束 -->
  
  <!-- 商品列表开始 -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row"> 
        
        <!-- Home 选项卡  -->
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
            <!--推荐商品 -->
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">主打产品</a></li>
              <li class="divider"></li>
               @foreach($cates as $key=>$value)
              <li> <a href="#top-sellers{{$key}}" data-toggle="tab" aria-expanded="false">{{$value->name}}</a> </li>
              @endforeach
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                            <!--图片左上角 -->
                              <div class="icon-sale-label sale-left">热销</div>
                              <!--图片右上角 -->
                              <div class="icon-new-label new-right">新款</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="static/home/images/products/img01.jpg" alt=""> <img class="hover-img" src="static/home/images/products/img01.jpg" alt=""></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> 加入购物车</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @foreach($cates as $key=>$value)
              <!-- 选项卡页面二 -->
              
               <div class="tab-pane fade" id="top-sellers{{$key}}">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">  
                         @foreach($shop as $val)
                         @if ($val->cate_id == $value->id)
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                            <!-- 图片标注 -->
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <!-- 特效 -->
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{substr($val->pic,1)}}" alt=""> <img class="hover-img" src="{{substr($val->pic,1)}}" alt=""></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span>加入购物车</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{$val->name}}</a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">${{$val->price}}</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         @endif
                         @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              @endforeach
            </div>
          </div>
        </div>
        <!--Hot deal -->
        <!-- 右侧1 -->
        <div class="col-md-3 col-sm-4 col-xs-12 hot-products">
          <div class="hot-deal"> <span class="title-text">热销</span>
            <ul class="products-grid">
              <li class="item">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-hot-label hot-right">火爆</div>
                      <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                        <figure> <img class="first-img" src="{{substr($shop[0]->pic,1)}}" alt=""> <img class="hover-img" src="{{substr($shop[0]->pic,1)}}" alt=""></figure>
                        </a>
                        <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span>加入购物车</span> </button>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 jtv-timer-grid"></div>
                      </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                          <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                          <div class="mt-button quick-view"> <a href="/homeShop/{{$shop[0]->id}}"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">

                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{$shop[0]->name}} </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                          <div class="item-price">
                            <div class="price-box"><span>销量：{{$shop[0]->sales}}</span></div>
                            <div class="price-box"> <span class="regular-price"> <span class="price">${{$shop[0]->price}}</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end main container --> 
  {{csrf_field()}}
  <!-- top banner -->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="static/home/images/top-banner1.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Save up 25%</h3>
            <span class="sub-title">Nice & Cleans</span> </div>
        </div>
      </div>
      <div class="col-sm-5 col-xs-12">
        <div class="jtv-banner-box">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="static/home/images/top-banner2.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Powerful Stereo <span>Sound</span></h3>
            <span class="sub-title">You're future in the sound !</span> <a href="#" class="button">Buy Now</a> </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="static/home/images/top-banner3.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">New Arrival</h3>
          </div>
        </div>
        <div class="jtv-banner-box banner-inner">
          <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="static/home/images/top-banner4.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Accessories</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--special-products-->
  
  <div class="container">
    @foreach($cates as $value)
    <div class="special-products">
      <div class="page-header">
        <h2>{{$value->name}}</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 atm">
              @foreach($shop as $val)
              @if($value->id == $val->cate_id)
              <div class="product-item ttt">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-sale-label sale-left">Sale</div>
                    <div class="icon-new-label new-right">New</div>
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="{{substr($val->pic,1)}}" alt=""> <img class="hover-img" src="{{substr($val->pic,1)}}" alt=""></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> 添加到购物车</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="javascript:;" onClick="shoucang(this,{{$val->id}})"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="/homeShop/{{$val->id}}"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
             @endforeach
              
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6"> 
        <!-- Testimonials Box -->
        <div class="testimonials">
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <div class="holder">
                  <p>坚持就是胜利</p>
                  <div class="thumb"> <img src="static/home/images/testimonials-img3.jpg" alt="testimonials img"> </div>
                  <strong class="name">梁崧</strong> <strong class="designation">前端骨干工程师, NB</strong> </div>
                <div class="holder">
                  <p>是兄弟就一起编程</p>
                  <div class="thumb"> <img src="static/home/images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">邓文波</strong> <strong class="designation">后端架构师</strong> </div>
                <div class="holder">
                  <p>喜欢就加入我们把</p>
                  <div class="thumb"> <img src="static/home/images/testimonials-img2.jpg" alt="testimonials img"> </div>
                  <strong class="name">梁耀东</strong> <strong class="designation">数据库工程, OCP</strong> </div>
                <div class="holder">
                  <p>IG牛逼</p>
                  <div class="thumb"> <img src="static/home/images/testimonials-img4.jpg" alt="testimonials img"> </div>
                  <strong class="name">谢文键</strong> <strong class="designation">网络工程师,XB</strong> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Testimonials Box --> 
      <!-- our clients Slider -->
      <div class="col-md-6">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6"> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="static/home/images/brand1.png" alt="Image"></a> <a href="#"><img src="static/home/images/brand2.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="static/home/images/brand3.png" alt="Image"></a> <a href="#"><img src="static/home/images/brand4.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="static/home/images/brand5.png" alt="Image"></a> <a href="#"><img src="static/home/images/brand6.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="static/home/images/brand7.png" alt="Image"></a> <a href="#"><img src="static/home/images/brand3.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- 文章 -->
  
  <div class="container">
    
    <div id="latest-news" class="news">
      <div class="page-header">
        <h2>最新消息</h2>
      </div>
     
      <div class="slider-items-products"> 
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            @foreach($xinwen as $value)
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="{{$value->url}}"> <img class="primary-img" src="{{$value->thumbnail_pic_s}}" alt=""></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h3><a href="single_post.html">{{$value->title}}</a></h3>
                  <p>{{$value->author_name}}</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> {{rand(1,1000)}} likes</span> <span class="blog-comments"><i class="fa fa-comment"></i>{{$value->category}}</span>
                  <div class="blog-action"> <span>{{$value->date}}</span> <a class="read-more" href="single_post.html">查看更多</a> </div>
                </div>
              </div>
            </div>
            @endforeach
            
          
            
            
            
          </div>
        </div>
      </div> 

    </div>
   
  </div>
  
  <!-- Bottom Banner Start -->
  
  <div class="bottom-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4"> <a href="#" class="bottom-banner-img"><img src="static/home/images/ads-04.jpg" alt="bottom banner"> <span class="banner-overly"></span>
          <div class="bottom-img-info">
            <h3>Electronic</h3>
            <h6>Sed diam nonummy nibh euismod tincidunt</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
        <div class="col-md-8 col-sm-8"> <a href="#" class="bottom-banner-img last"><img src="static/home/images/ads-05.jpg" alt="bottom banner"> <span class="banner-overly last"></span>
          <div class="bottom-img-info last">
            <h3>New Collection</h3>
            <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
      </div>
    </div>
  </div>
  
  <!-- category area start -->
  <div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">Top Rated</h2>
            
            
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="static/home/images/products/img08.jpg" alt=""> <img class="secondary-img" src="static/home/images/products/img09.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">ON SALE</h2>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="static/home/images/products/img12.jpg" alt=""> <img class="secondary-img" src="static/home/images/products/img11.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $119.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        
        <!-- service area start -->
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="jtv-service-area"> 
            
            <!-- jtv-single-service start -->
            
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="" src="static/home/images/customer-service-icon.png"> </div>
              <div class="service-text">
                <h2>全天候客户服务</h2>
                <p><span>请拨打020 - 123 - 456联系我们</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="" src="static/home/images/shipping-icon.png"> </div>
              <div class="service-text">
                <h2>全球范围内免费送货</h2>
                <p><span>订单满$ 199 - 每周7天</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="" src="static/home/images/guaratee-icon.png"> </div>
              <div class="service-text">
                <h2>活动</h2>
                <p><span>更多优惠！</span></p>
              </div>
            </div>
            
            <!-- jtv-single-service end --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
  <script>
      $('div.atm').each(function(){
          if($(this).find('div.ttt').html()==null){
            $(this).append('<div style="text-align:center">暂无该分类商品数据</div>');
          }
    });

      function shoucang(obj,id){
         var token = $('input[name="_token"]').val();
            $.ajax({
              type: 'POST',
              url: '/homeShop',
              data: {sid:id,'_token':token},
              dataType: 'json',
              success: function(data){
                if(data.result==1){
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
  <!-- category-area end --> 
@endsection
@section('title','商城首页')