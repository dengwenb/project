@extends("Home.Public.public")
@section("home")
 <nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label">Categories</span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
              <!-- 左侧导航 -->
                <h3>左侧导航</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                <!-- 左侧导航顶级 -->
               @foreach ($nav as $row)
                  <li> <a href="#"><i class="icon fa fa-desktop fa-fw"></i>{{$row->name}}</a>
                   @if (count($row->suv))
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                         @foreach($row->suv as $rows) 
                          <div class="col-md-4 col-sm-6">

                            <h3>{{$rows->name}}</h3>
                            @if (count($rows->suv))
                            <ul class="nav">
                              @foreach($rows->suv as $rowss)
                              <li><a href="">>>>{{$rowss->name}}</a></li>
                             @endforeach
                            </ul>
                            <br>
                               @endif
                            
                          </div>
                          @endforeach

                          
                         
                        </div>
                      </div>
                    </div>
                     @endif
                  </li>
                  @endforeach
                  
                 
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-9 col-sm-8">
          <div class="mtmegamenu">
            <ul>

              <li class="mt-root demo_custom_link_cms">
              
                <div class="mt-root-item"><a href="index.html">
                  <div class="title title_font"><span class="title-text"></span></div>
                  </a></div>
                  
                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                
                  <li class="menu-item depth-1">
                  <!-- 分级目录 -->
                    <div class="title"> <a href="index.html"><span></span></a></div>
                  </li>
                  
                   <li class="menu-item depth-1">
                
                  </li>
                   
                </ul>
              
              </li>
             
            
              <li class="mt-root">
                <div class="mt-root-item">
                <!-- 热销推荐 -->
                  <div class="title title_font"><span class="title-text">热销</span></div>
                </div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                            <figure> <img class="first-img" src="/static/Home/HomeLogin/images/products/img06.jpg" alt=""> <img class="hover-img" src="/static/Home/HomeLogin/images/products/img06.jpg" alt=""></figure>
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
                              <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                 
                
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- 轮播图开始 -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
          <!-- 图片 1 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- 底层图片 --> 
            <img src="/static/Home/HomeLogin/images/slider/slider-img1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- 动态 --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption very_big_white skewfromrightshort fadeout"
                          data-x="center"
                          data-y="100"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"

                          style=" font-size:70px; font-weight:800; color:#fe0100;">Huge <span style=" color:#000;">sale</span> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout"
                          data-x="center"
                          data-y="165"
                          data-hoffset="0"
                          data-voffset="-73"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style=" font-size:20px; font-weight:500; color:#337ab7;"> Sale off 75% all products </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
                          data-x="center"
                          data-y="210"
                          data-hoffset="0"
                          data-voffset="98" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="500"
                          data-start="1500"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;"><a href='#' class='largebtn slide1'>Learn More</a> </div>
          </li>
          
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="/static/Home/HomeLogin/images/slider/slider-img2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
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
                          style=" font-size:70px; font-weight:800; color:#333;">GREAT LOOKS </div>
            
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
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">The perfect synthesis of innovative thinking </div>
            
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
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
          </li>
          
          <!-- SLIDE 3 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="/static/Home/HomeLogin/images/slider/slider-img3.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption big_100_white lft start fadeout"
                          data-x="310"
                          data-y="120"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fff;">High</div>
            <div class="tp-caption big_100_white lft fadeout"
                          data-x="310"
                          data-y="180"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:50px; font-weight:800; color:#fed700;">Definition</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text lfb fadeout"
                          data-x="310"
                          data-y="260"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Camera For You?</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption fade fadeout tp-resizeme"
                          data-x="310"
                          data-y="320"
                          data-hoffset="-100"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="800"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
          </li>
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
              <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">畅销</a> </li>
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
                                <figure> <img class="first-img" src="/static/Home/HomeLogin/images/products/img01.jpg" alt=""> <img class="hover-img" src="/static/Home/HomeLogin/images/products/img01.jpg" alt=""></figure>
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
              <!-- 选项卡页面二 -->
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                            <!-- 图片标注 -->
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <!-- 特效 -->
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="/static/Home/HomeLogin/images/products/img03.jpg" alt=""> <img class="hover-img" src="/static/Home/HomeLogin/images/products/img03.jpg" alt=""></figure>
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
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                        <figure> <img class="first-img" src="/static/Home/HomeLogin/images/products/img15.jpg" alt=""> <img class="hover-img" src="/static/Home/HomeLogin/images/products/img15.jpg" alt=""></figure>
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
                          <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">

                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">黑灯下火的 </a> </div>
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
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end main container --> 
  
  <!-- top banner -->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="/static/Home/HomeLogin/images/top-banner1.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Save up 25%</h3>
            <span class="sub-title">Nice & Cleans</span> </div>
        </div>
      </div>
      <div class="col-sm-5 col-xs-12">
        <div class="jtv-banner-box">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="/static/Home/HomeLogin/images/top-banner2.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Powerful Stereo <span>Sound</span></h3>
            <span class="sub-title">You're future in the sound !</span> <a href="#" class="button">Buy Now</a> </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="/static/Home/HomeLogin/images/top-banner3.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">New Arrival</h3>
          </div>
        </div>
        <div class="jtv-banner-box banner-inner">
          <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="/static/Home/HomeLogin/images/top-banner4.jpg" alt=""></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Accessories</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--special-products-->
  
  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>特殊产品</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-sale-label sale-left">Sale</div>
                    <div class="icon-new-label new-right">New</div>
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="/static/Home/HomeLogin/images/products/img08.jpg" alt=""> <img class="hover-img" src="/static/Home/HomeLogin/images/products/img08.jpg" alt=""></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
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
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. </p>
                  <div class="thumb"> <img src="/static/Home/HomeLogin/images/testimonials-img3.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong> </div>
                <div class="holder">
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <div class="thumb"> <img src="/static/Home/HomeLogin/images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                <div class="holder">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud. </p>
                  <div class="thumb"> <img src="/static/Home/HomeLogin/images/testimonials-img2.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong> </div>
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat.</p>
                  <div class="thumb"> <img src="/static/Home/HomeLogin/images/testimonials-img4.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong> </div>
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
                <div class="item"> <a href="#"><img src="/static/Home/HomeLogin/images/brand1.png" alt="Image"></a> <a href="#"><img src="/static/Home/HomeLogin/images/brand2.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="/static/Home/HomeLogin/images/brand3.png" alt="Image"></a> <a href="#"><img src="/static/Home/HomeLogin/images/brand4.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="/static/Home/HomeLogin/images/brand5.png" alt="Image"></a> <a href="#"><img src="/static/Home/HomeLogin/images/brand6.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="/static/Home/HomeLogin/images/brand7.png" alt="Image"></a> <a href="#"><img src="/static/Home/HomeLogin/images/brand3.png" alt="Image"></a> </div>
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
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="/static/Home/HomeLogin/images/blog-img1.jpg" alt=""></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">标题</a></h2>
                  <p>介绍</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
           
            
          
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bottom Banner Start -->
  
  <div class="bottom-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4"> <a href="#" class="bottom-banner-img"><img src="/static/Home/HomeLogin/images/ads-04.jpg" alt="bottom banner"> <span class="banner-overly"></span>
          <div class="bottom-img-info">
            <h3>Electronic</h3>
            <h6>Sed diam nonummy nibh euismod tincidunt</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
        <div class="col-md-8 col-sm-8"> <a href="#" class="bottom-banner-img last"><img src="/static/Home/HomeLogin/images/ads-05.jpg" alt="bottom banner"> <span class="banner-overly last"></span>
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
              <div class="product-img"> <a href="single_product.html"> <img src="/static/Home/HomeLogin/images/products/img08.jpg" alt=""> <img class="secondary-img" src="/static/Home/HomeLogin/images/products/img09.jpg" alt=""> </a> </div>
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
              <div class="product-img"> <a href="single_product.html"> <img src="/static/Home/HomeLogin/images/products/img12.jpg" alt=""> <img class="secondary-img" src="/static/Home/HomeLogin/images/products/img11.jpg" alt=""> </a> </div>
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
              <div class="service-icon"> <img alt="" src="/static/Home/HomeLogin/images/customer-service-icon.png"> </div>
              <div class="service-text">
                <h2>24/7 customer service</h2>
                <p><span>Call us 24/7 at 000 - 123 - 456</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="" src="/static/Home/HomeLogin/images/shipping-icon.png"> </div>
              <div class="service-text">
                <h2>free shipping worldwide</h2>
                <p><span>On order over $199 - 7 days a week</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="" src="/static/Home/HomeLogin/images/guaratee-icon.png"> </div>
              <div class="service-text">
                <h2>money back guaratee!</h2>
                <p><span>Send within 30 days</span></p>
              </div>
            </div>
            
            <!-- jtv-single-service end --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- category-area end --> 
@endsection
@section('title','商城首页')