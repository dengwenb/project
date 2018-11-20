<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> @yield('title')</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/bootstrap.min.css">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="/static/Home/css/simple-line-icons.css" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/static/Home/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="/static/Home/css/owl.transitions.css">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/animate.css" media="all">

<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/flexslider.css" >

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/jquery-ui.css">

<!-- Revolution Slider CSS -->
<link href="/static/Home/css/revolution-slider.css" rel="stylesheet">

<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/style.css" media="all">
<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/css/blog.css" media="all">
<style>
#WidgetFloaterPanels{
    display:none !important;
}
#WidgetLogoPanel{
    display:none !important;
}
 
</style>
</head>

<body class="cms-index-index cms-home-page">
     
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 

<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li><a href="index.html" class="home1">Home</a>
      <ul>
        <li><a href="index.html"><span>Home Version 1</span></a></li>
        <li><a href="../Version2/index.html"><span>Home Version 2</span></a></li>
        <li><a href="../Version3/index.html"><span>Home Version 3</span></a></li>
        <li><a href="../Version4/index.html"><span>Home Version 4</span></a></li>
        <li><a href="../Version5/index.html"><span>Home Version 5</span></a></li>
        
   
      </ul>
    </li>

    <li><a href="contact_us.html">Contact us</a></li>
    <li><a href="about_us.html">About us</a></li>
    <li><a href="blog.html">Blog</a>
      <ul>
        <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
        <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
        <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
        <li><a href="single_post.html">Single post </a></li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Camera & Photo</a>
      <ul>
        <li><a href="#" class="">Accessories</a>
          <ul>
            <li><a href="shop_grid.html">Cocktail</a></li>
            <li><a href="shop_grid.html">Day</a></li>
            <li><a href="shop_grid.html">Evening</a></li>
            <li><a href="shop_grid.html">Sundresses</a></li>
          </ul>
        </li>
        <li><a href="#">Dresses</a>
          <ul>
            <li><a href="shop_grid.html">Accessories</a></li>
            <li><a href="shop_grid.html">Hats and Gloves</a></li>
            <li><a href="shop_grid.html">Lifestyle</a></li>
            <li><a href="shop_grid.html">Bras</a></li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="shop_grid.html">Flat Shoes</a> </li>
            <li> <a href="shop_grid.html">Flat Sandals</a> </li>
            <li> <a href="shop_grid.html">Boots</a> </li>
            <li> <a href="shop_grid.html">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="shop_grid.html">Bracelets</a> </li>
            <li> <a href="shop_grid.html">Necklaces &amp; Pendent</a> </li>
            <li> <a href="shop_grid.html">Pendants</a> </li>
            <li> <a href="shop_grid.html">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul>
            <li> <a href="shop_grid.html">Casual Dresses</a> </li>
            <li> <a href="shop_grid.html">Evening</a> </li>
            <li> <a href="shop_grid.html">Designer</a> </li>
            <li> <a href="shop_grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="shop_grid.html">Swimsuits</a> </li>
            <li> <a href="shop_grid.html">Beach Clothing</a> </li>
            <li> <a href="shop_grid.html">Clothing</a> </li>
            <li> <a href="shop_grid.html">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Computers</a>
      <ul>
        <li> <a href="#" class="">Clothing</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Coats &amp; Jackets</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Raincoats</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Blazers</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Jackets</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Evening</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Designer</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Coats</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Wallets</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"> <a href="shop_grid.html">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Apple Store</a>
      <ul>
        <li> <a href="shop_grid.html">Mobiles</a>
          <ul>
            <li> <a href="shop_grid.html">iPhone</a> </li>
            <li> <a href="shop_grid.html">Samsung</a> </li>
            <li> <a href="shop_grid.html">Nokia</a> </li>
            <li> <a href="shop_grid.html">Sony</a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html" class="">Music &amp; Audio</a>
          <ul>
            <li> <a href="shop_grid.html">Audio</a> </li>
            <li> <a href="shop_grid.html">Cameras</a> </li>
            <li> <a href="shop_grid.html">Appling</a> </li>
            <li> <a href="shop_grid.html">Car Music</a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html">Accessories</a>
          <ul>
            <li> <a href="shop_grid.html">Home &amp; Office</a> </li>
            <li> <a href="shop_grid.html">TV &amp; Home Theater</a> </li>
            <li> <a href="shop_grid.html">Phones &amp; Radio</a> </li>
            <li> <a href="shop_grid.html">All Electronics</a> </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
<!-- end mobile menu -->
<div id="page"> 
  <!--首页公告-->
  <!-- <div id="newsletter-popup-conatiner">
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
  </div> -->
  <!--End of Newsletter Popup--> 
  
  <!-- 顶部开始 -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
             

              <div class="welcome-msg ">欢迎光临 </div>

              <span class="phone hidden-sm">在线人数：1</span> </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.html"><i class="fa fa-user"></i><span class="hidden-xs">个人中心</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="/homeShopcol"><i class="fa fa-heart"></i><span class="hidden-xs">我的收藏</span></a></div>
                <div class="blog"><a title="Blog" href="blog.html"><i class="fa fa-rss"></i><span class="hidden-xs">公告</span></a></div>
                <div class="login"><a href="account_page.html"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">登陆</span></a></div>
              </div>
              <!-- 语言设置 -->
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="/static/Home/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <!-- <li> <a class="selected" href="#"> <img src="/static/Home/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>

                      <li> <a href="#"> <img src="/static/Home/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="/static/Home/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="/static/Home/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="/static/Home/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="/static/Home/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li> 
                    -->
                    <select id="change" onchange="dianji()">
     
    <option value="">切换语言</option>
    <option value="zhongwen">中文</option>
    <option value="English">英文</option>
    <option value="Français">法文</option>
     
</select>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
                
                <!-- End Default Welcome Message --> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12"> 
            <!-- 商城 Logo -->
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="/static/Home/images/logo.png"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-xs-9 col-sm-6 col-md-6"> 
            <!-- 搜索开始 -->
            
            <div class="top-search">
              <div id="search">
                <form>
                  <div class="input-group">
                    <select class="cate-dropdown hidden-xs" name="category_id">

                      <option>All Categories</option>
                      <option>women</option>
                      <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                      <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                      <option>&nbsp;&nbsp;&nbsp;Top</option>
                      <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                      <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                      <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                      <option>Men</option>
                      <option>Electronics</option>
                      <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                      <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                    </select>
                    <input type="text" class="form-control" placeholder="搜索" name="search">
                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
            
            <!-- 搜索结束 --> 
          </div>
          <!-- top cart -->
          
          <div class="col-lg-3 col-xs-3 top-cart">
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                  <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner hidden-xs"><span class="cart-title">购物车</span> <span class="cart-total" style="color:red"> {{count(session('cart'))}} 件</span><span class="attpri" style="position:relative;top:-45px;left:50px"></span></div>
                  </a></div>
                <div>
                  <div class="top-cart-content">

                    <div class="block-subtitle hidden-xs">最近加入的项目</div>
                    <ul id="cart-sidebar" class="mini-products-list">
                      @if($ortotal = 0)  @endif
                      @if(!empty(session('cart')))
                      @foreach(session('cart') as $value)
                      <li class="item odd"> <a href="/homeCart" title="Ipsums Dolors Untra" class="product-image"><img src="{{$value['pic']}}" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="javascript:;"  onClick="mydel(this,{{$value['distant']}},{{$value['sid']}})"  title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">商品</a></p>
                          <strong class="strnum">{{$value['num']}}</strong> x <span class="price">${{$value['price']}}</span> </div>
                        
                        <input type="hidden" name="totalaaa" value="{{$ortotal +=$value['num']*$value['price']}}">
                      </li>
                     @endforeach
                     @endif
                    </ul>

                    <div class="top-subtotal">总价: <span class="price attpri">${{$ortotal or 0}}</span></div>
                    <div class="actions">
                      <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>去结算</span></button>
                      <button class="view-cart" type="button" onClick="location='/homeCart'"><i class="fa fa-shopping-cart"></i> <span>查看购物车</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
<!-- Navbar -->
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
                  <li  style="display:none"> <a href="#"><i class="icon fa fa-camera fa-fw"></i> 左侧顶级</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <ul class="nav">
                            <!-- 左侧导航分级 -->
                              <li><a href="shop_grid.html"><span>左侧分级</span></a></li>
                              <li><a href="shop_grid.html"><span>Nikon</span></a></li>
                              <li><a href="shop_grid.html"><span>Olympus</span> </a></li>
                              <li><a href="shop_grid.html"><span>ALPA</span> </a></li>
                              <li> <a href="shop_grid.html"><span>Bolex</span></a></li>
                              <li><a href="shop_grid.html"><span>Samsung </span></a></li>
                              <li><a href="shop_grid.html"><span>Panasonic</span></a></li>
                              <li><a href="shop_grid.html"><span>Thomson </span></a></li>
                              <li><a href="shop_grid.html"><span>Bell & Howell</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <ul class="nav">
                              <li><a href="shop_grid.html"><span>Digital camera</span></a></li>
                              <li><a href="shop_grid.html"><span>High-speed</span></a></li>
                              <li><a href="shop_grid.html"><span>Camera phone</span> </a></li>
                              <li><a href="shop_grid.html"><span>Multiplane</span> </a></li>
                              <li> <a href="shop_grid.html"><span>Pocket camera</span></a></li>
                              <li><a href="shop_grid.html"><span>Video camera</span></a></li>
                              <li><a href="shop_grid.html"><span>Zenith camera</span></a></li>
                              <li><a href="shop_grid.html"><span>Single-lens reflex</span></a></li>
                              <li><a href="shop_grid.html"><span>Light-field</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner menu-banner">
                                <div class="add-right"><a href="#"><img src="/static/Home/images/menu-img4.jpg" alt=""></a></div>
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


        <div class="col-md-9 col-sm-8">
          <div class="mtmegamenu">
            <ul>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="index.html">
                <!-- 顶级栏目 -->
                  <div class="title title_font"><span class="title-text">顶级</span></div>
                  </a></div>
                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                  <li class="menu-item depth-1">
                  <!-- 分级目录 -->
                    <div class="title"> <a href="index.html"><span>分级</span></a></div>
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
                            <figure> <img class="first-img" src="/static/Home/images/products/img06.jpg" alt=""> <img class="hover-img" src="/static/Home/images/products/img06.jpg" alt=""></figure>
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
  <!-- end nav --> 
  @section('home') 
  @show
  

  <footer>
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-7">
            <form id="newsletter-validate-detail" method="post" action="#">
              <h3 class="hidden-sm">Sign up for newsletter</h3>
              <div class="newsletter-inner">
                <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="social col-md-4 col-sm-5">
            <ul class="inline-mode">
              <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
              <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
              <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
              <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
              <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <div class="footer-logo"><a href="index.html"><img src="/static/Home/images/footer-logo.png" alt="fotter logo"></a> </div>
          <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p>Support@themes.com</p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>(800) 0123 456 789</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p> My Company, 12/34 - West 21st Street, New York, USA</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="#s">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li> <a href="sitemap.html"> Sites Map </a> </li>
                <li> <a href="#">News</a> </li>
                <li> <a href="#">Trends</a> </li>
                <li> <a href="about_us.html">About Us</a> </li>
                <li> <a href="contact_us.html">Contact Us</a> </li>
                <li> <a href="#">My Orders</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="account_page.html">Account</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li> <a href="#">Return Policy</a> </li>
                <li> <a href="#">Special</a> </li>
                <li> <a href="#">Lookbook</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2016 <a href="#"> MyStore </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>
                <li><a href="#"><img title="Visa" alt="Visa" src="/static/Home/images/visa.png"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" src="/static/Home/images/paypal.png"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" src="/static/Home/images/discover.png"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" src="/static/Home/images/master-card.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="totop"> </a> </div>
       {{csrf_field()}}
       {{method_field('DELETE')}}
<!-- End Footer --> 

<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="/static/Home/js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="/static/Home/js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="/static/Home/js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="/static/Home/js/jquery.bxslider.js"></script> 

<!-- Slider Js --> 
<script type="text/javascript" src="/static/Home/js/revolution-slider.js"></script> 

<!-- megamenu js --> 
<script type="text/javascript" src="/static/Home/js/megamenu.js"></script> 
<!-- owl.carousel.min js --> 
<script type="text/javascript" src="/static/Home/js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="/static/Home/js/jquery.bxslider.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="/static/Home/js/jquery.flexslider.js"></script> 

<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="/static/Home/js/mobile-menu.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="/static/Home/js/jquery-ui.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="/static/Home/js/main.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="/static/Home/js/countdown.js"></script> 
<script type="text/javascript" src="/static/Home/js/cloud-zoom.js"></script> 
<script type="text/javascript" src="/static/Home/js/jquery.magnifying-zoom.js"></script>

<!-- Revolution Slider --> 
<script type="text/javascript">
          jQuery(document).ready(function() {
                 jQuery('.tp-banner').revolution(
                  {
                      delay:9000,
                      startwidth:1170,
                      startheight:530,
                      hideThumbs:10,

                      navigationType:"bullet",              
                      navigationStyle:"preview1",

                      hideArrowsOnMobile:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      spinner:"spinner4"
                  });
          });
</script> 

<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/16 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>
  <script>
  function mydel(obj,distant,id)
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
              $(obj).parents("li").remove();

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

  $('span.attpri').html('$'+{{$ortotal or 0}});
</script>
<!-- <script>
     
$(function(){
     var script=document.createElement("script"); 
     script.type="text/javascript"; 
     script.src="http://www.microsoftTranslator.com/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**"; 
     document.getElementsByTagName('head')[0].appendChild(script); 
  
    var resultm = sessionStorage.getItem("language");
                 
     document.onreadystatechange = function () {
 
                  
             if (document.readyState == 'complete') {
                          
                    if(resultm==="English"){
                             Microsoft.Translator.Widget.Translate('zh-CHS', 'en', onProgress, onError, onComplete, onRestoreOriginal, 2000);
                    }else if(resultm==="Français"){
                             Microsoft.Translator.Widget.Translate('zh-CHS', 'fr', onProgress, onError, onComplete, onRestoreOriginal, 2000);
                    }else  if(resultm==="zhongwen"){
                             Microsoft.Translator.Widget.Translate('zh-CHS', 'zh-CHS', onProgress, onError, onComplete, onRestoreOriginal, 2000);
                    }
             }
     }
      
     function onProgress(value) {
            $("#WidgetFloaterPanels").hide();
     }
     function onError(error) {
            $("#WidgetFloaterPanels").hide();
     }
     function onComplete() {
            $("#WidgetFloaterPanels").hide();
     }
     function onRestoreOriginal() {
            $("#WidgetFloaterPanels").hide();
     }
});
     
     
     
function dianji(){
         
      var result = $("#change").val();
         
      if(result==="English"){
          
            sessionStorage.setItem("language", "English");
             
      }else if(result==="Français"){
          
            sessionStorage.setItem("language", "Français");
      
      }else if(result==="zhongwen"){
          
            sessionStorage.setItem("language", "zhongwen");
      }
                  
        window.location.reload();//刷新当前页面.
     
    }
 
      $(document).ready(function(){ 
　
      $('#WidgetFloaterPanels').html('').hide().removeAttr('style');
      $('div[translate="no"]').html('').hide().removeAttr('style');
    
　　}); 

        window.onmousemove = function(){

            $('#WidgetFloaterPanels').next().hide(); 
            // alert($('#WidgetFloaterPanels').next().html());
            if($('#WidgetFloaterPanels').next().html()!=undefined){
                $('#WidgetFloaterPanels').next().html('').remove();
            }
        }      
</script> -->
</body>
</html>
