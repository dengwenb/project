<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
 --><!-- <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'> -->

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/bootstrap.min.css">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/simple-line-icons.css" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/owl.theme.css">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/animate.css" media="all">

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/jquery-ui.css">



<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="/static/Home/Homelogin/css/style.css" media="all">
</head>

<body class="shop_grid_page">
     


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
    <li><a href="shop_grid.html">Pages</a>
      <ul>
        <li><a href="#" class="">Shop Pages </a>
          <ul>
            <li> <a href="shop_grid.html"> Shop grid </a> </li>
            <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
            <li> <a href="shop_list.html"> Shop list </a> </li>
            <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
            <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
          </ul>
        </li>
        <li><a href="#">Ecommerce Pages </a>
          <ul>
            <li> <a href="wishlist.html"> Wishlists </a> </li>
            <li> <a href="checkout.html"> Checkout </a> </li>
            <li> <a href="compare.html"> Compare </a> </li>
            <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
            <li> <a href="quick_view.html"> Quick View </a> </li>
          </ul>
        </li>
        <li> <a href="#">Static Pages </a>
          <ul>
            <li> <a href="account_page.html"> Create Account Page </a> </li>
            <li> <a href="about_us.html"> About Us </a> </li>
            <li> <a href="contact_us.html"> Contact us </a> </li>
            <li> <a href="404error.html"> Error 404 </a> </li>
            <li> <a href="faq.html"> FAQ </a> </li>
          </ul>
        </li>
        <li> <a href="#">Product Categories </a>
          <ul>
            <li> <a href="cat-3-col.html"> 3 Column Sidebar </a> </li>
            <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
            <li> <a href="cat-4-col-full.html"> 4 Column Full width </a> </li>
            <li> <a href="cat-6-col.html"> 6 Columns Full width</a> </li>
          </ul>
        </li>
        <li> <a href="#">Single Product Pages </a>
          <ul>
            <li><a href="single_product.html"> single product </a> </li>
            <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
            <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
            <li> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a> </li>
          </ul>
        </li>
        <li> <a href="#"> Blog Pages </a>
          <ul>
            <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
            <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
            <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
            <li><a href="single_post.html">Single post </a></li>
          </ul>
        </li>
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
 <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Welcome to MyStore! </div>
              <span class="phone hidden-sm">Call Us: +123.456.789</span> </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.html"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a></div>
                <div class="blog"><a title="Blog" href="blog.html"><i class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
                <div class="login"><a href="account_page.html"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a></div>
              </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img href="/static/Home/Homelogin/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img href="/static/Home/Homelogin/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img href="/static/Home/Homelogin/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img href="/static/Home/Homelogin/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img href="/static/Home/Homelogin/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img href="/static/Home/Homelogin/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img href="/static/Home/Homelogin/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
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
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" href="/static/Home/Homelogin/images/logo.png"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-xs-9 col-sm-6 col-md-6"> 
            <!-- Search -->
            
            <div class="top-search">
              <div id="search">
                <form><div class="input-group">
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
                      <input type="text" class="form-control" placeholder="Search" name="search">
                      <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
              </div>
            </div>
            
            <!-- End Search --> 
          </div>
          <!-- top cart -->
          
          <div class="col-lg-3 col-xs-3 top-cart">
            
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                  <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Shopping Cart</span> <span class="cart-total">4 Item(s): $520.00</span></div>
                  </a></div>
                <div>
                  <div class="top-cart-content">
                    <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                    <ul id="cart-sidebar" class="mini-products-list">
                      <li class="item odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img href="/static/Home/Homelogin/images/products/img07.jpg" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p>
                          <strong>1</strong> x <span class="price">$20.00</span> </div>
                      </li>
                      <li class="item even"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img href="/static/Home/Homelogin/images/products/img08.jpg" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Consectetur utes anet adipisicing elit</a> </p>
                          <strong>1</strong> x <span class="price">$230.00</span> </div>
                      </li>
                      <li class="item last odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img href="/static/Home/Homelogin/images/products/img10.jpg" alt="Lorem ipsum dolor" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="#">Sed do eiusmod tempor incidist</a> </p>
                          <strong>2</strong> x <span class="price">$420.00</span> </div>
                      </li>
                    </ul>
                    <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                    <div class="actions">
                      <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                      <button class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
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
              <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div><span class="mm-label">Categories</span>
            </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>Categories</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li> <a href="#"><i class="icon fa fa-camera fa-fw"></i> Camera & Photo</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <ul class="nav">
                              <li><a href="shop_grid.html"><span>Canon</span></a></li>
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
                               <div class="add-right"><a href="#"><img href="/static/Home/Homelogin/images/menu-img4.jpg" alt=""></a></div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#"><i class="icon fa fa-desktop fa-fw"></i> Computers</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Dell</h3>
                            <ul class="nav">
                              <li><a href="shop_grid.html">Dell Inspiron 3558</a></li>
                              <li><a href="shop_grid.html">Dell Adapter </a></li>
                              <li><a href="shop_grid.html">Optical USB Mouse</a></li>
                              <li><a href="shop_grid.html">Laptop Battery</a></li>
                            </ul>
                            <br>
                            <h3>Microsoft</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html">Lumia 550 4G</a> </li>
                              <li> <a href="shop_grid.html">Surface Pro 4</a> </li>
                              <li> <a href="shop_grid.html">HTC Desire 620G</a> </li>
                              <li> <a href="shop_grid.html">DMG Flip Cover</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Apple</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html">Apple Macbook Pro</a> </li>
                              <li> <a href="shop_grid.html">Newest Apple Macbook Pro</a> </li>
                              <li> <a href="shop_grid.html">Retina Display Laptop</a> </li>
                              <li> <a href="shop_grid.html">Silicone Keyboard</a> </li>
                            </ul>
                            <br>
                            <h3>Lenovo</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html">Lenovo Yoga 300</a> </li>
                              <li> <a href="shop_grid.html">Lenovo IdeaPad</a> </li>
                              <li> <a href="shop_grid.html">Tab 3 A710F Tablet</a> </li>
                              <li> <a href="shop_grid.html">Channel Speakers</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Computer <br>
                                    Services </h3>
                                  <div class="price-sale">2016</div>
                                  <a href="#">Shop Now</a> </div>
                               <div class="add-right"><a href="#"><img href="/static/Home/Homelogin/images/menu-img1.jpg" alt=""></a></div>
                              </div>
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Save up to</h3>
                                  <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                  <a href="#">Shopping Now</a> </div>
                                <div class="add-right"><a href="#"><img href="/static/Home/Homelogin/images/menu-img2.jpg" alt=""></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="shop_grid.html"><i class="icon fa fa-apple fa-fw"></i> Apple Store</a>
                    <div class="wrap-popup column2">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3>iPhone</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html"> iPhone SE </a> </li>
                              <li> <a href="shop_grid.htmls"> iPhone 6s Plus </a> </li>
                              <li> <a href="shop_grid.html"> iPhone 3G </a> </li>
                              <li> <a href="shop_grid.html"> iPad Pro </a> </li>
                            </ul>
                          </div>
                          <div class="col-sm-6 has-sep">
                            <h3> Watch </h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html"> Quartz Watches </a> </li>
                              <li> <a href="shop_grid.html"> Lover's Watches</a> </li>
                              <li> <a href="shop_grid.html"> Digital Watches </a> </li>
                              <li> <a href="shop_grid.html"> Sport Watch </a> </li>
                            </ul>
                          </div>
                          <div class="col-sm-12"> <a class="ads1" href="#"><img class="img-responsive" href="/static/Home/Homelogin/images/menu-img3.jpg" alt=""></a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="icon fa fa-location-arrow fa-fw"></i> Car Electronic</a></li>
                  <li> <a href="shop_grid.html"><i class="icon fa fa-headphones fa-fw"></i> Headphones</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="shop_grid.html"><span>Envent Stereo</span></a></li>
                          <li><a href="shop_grid.html"><span>Sennheiser</span></a></li>
                          <li><a href="shop_grid.html"><span>Philips</span></a></li>
                          <li><a href="shop_grid.html"><span>Sony</span></a></li>
                          <li><a href="shop_grid.html"><span>Avantree</span></a></li>
                          <li><a href="shop_grid.html"><span>Bajaao</span></a></li>
                          <li><a href="shop_grid.html"><span>FiiO</span></a></li>
                          <li><a href="shop_grid.html"><span>Audio-Technica</span></a></li>
                          <li><a href="shop_grid.html"><span>LUXA2</span></a></li>
                          <li><a href="shop_grid.html"><span>Geekria</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li><a href="#"><i class="icon fa fa-microphone fa-fw"></i> Accessories</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li> <a href="shop_grid.html"> Vacuum Cleaner </a> </li>
                          <li> <a href="shop_grid.html"> Memore Bluetooth</a> </li>
                          <li> <a href="shop_grid.html"> On-Ear Headphones </a> </li>
                          <li> <a href="shop_grid.html"> Digital MP3 Player </a> </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-gamepad fa-fw"></i> Game &amp; Video</a></li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-history fa-fw"></i> Old Products</a></li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-lightbulb-o fa-fw"></i> Lights &amp; Lighting</a></li>
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
                  <div class="title title_font"><span class="title-text">Home</span></div>
                  </a></div>
                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="index.html"><span>Home Version 1</span></a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="../Version2/index.html"><span>Home Version 2</span></a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="../Version3/index.html"><span>Home Version 3</span></a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="../Version4/index.html"><span>Home Version 4</span></a></div>
                  </li>
                   <li class="menu-item depth-1">
                    <div class="title"> <a href="../Version5/index.html"><span>Home Version 5</span></a></div>
                  </li>
                   <li class="menu-item depth-1">
                  
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                  <div class="title title_font"><span class="title-text">Page</span></div>
                  </a></div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Shop Pages </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.html"> Shop grid </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_list.html"> Shop list </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a></div>
                      </li>
                      <li class="menu-item">
                       <div class="title"> <a href="shop_grid_full_width.html"> Shop grid full width </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Ecommerce Pages </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="wishlist.html"> Wishlists </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="checkout.html"> Checkout </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="compare.html"> Compare </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shopping_cart.html"> Shopping cart </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="quick_view.html"> Quick View </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Static Pages </a></div>
                    <ul class="submenu">
                      <li class="menu-item depth-2 category ">
                        <div class="title"> <a href="account_page.html"> Create Account Page </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="about_us.html"> About Us </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="contact_us.html"> Contact us </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="404error.html"> Error 404 </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="faq.html"> FAQ </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Product Categories </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="cat-3-col.html"> 3 Column Sidebar </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="cat-4-col.html"> 4 Column Sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="cat-4-col-full.html"> 4 Column Full width </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="cat-6-col.html"> 6 Columns Full width</a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Single Product Pages </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="single_product.html"> single product </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="single_product_left_sidebar.html"> single product left sidebar</a></div>
                      </li>
                        <li class="menu-item">
                        <div class="title"> <a href="single_product_right_sidebar.html"> single product right sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="#"> Blog Pages </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="single_post.html"> Single post </a></div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="shop_grid.html">
                  <div class="title title_font"><span class="title-text">Contact Us</span> </div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="about_us.html">
                  <div class="title title_font"><span class="title-text">about us</span></div>
                  </a></div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="blog.html">
                  <div class="title title_font"><span class="title-text">Blog</span></div>
                  </a></div>
                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="single_post.html"> Single post </a></div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item">
                  <div class="title title_font"><span class="title-text">Best Seller</span></div>
                </div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area">
                            <figure> <img class="first-img" href="/static/Home/Homelogin/images/products/img06.jpg" alt=""> <img class="hover-img" href="/static/Home/Homelogin/images/products/img06.jpg" alt=""></figure>
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
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area">
                            <figure> <img class="first-img" href="/static/Home/Homelogin/images/products/img02.jpg" alt=""> <img class="hover-img" href="/static/Home/Homelogin/images/products/img02.jpg" alt=""></figure>
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
                  <li class="menu-item depth-1 product menucol-1-3 withimage">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="product-thumbnail">
                          <div class="icon-sale-label sale-left">Sale</div>
                          <div class="pr-img-area">
                            <figure> <img class="first-img" href="/static/Home/Homelogin/images/products/img03.jpg" alt=""> <img class="hover-img" href="/static/Home/Homelogin/images/products/img03.jpg" alt=""></figure>
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
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      
        
        <div class="page-content">
          
            <div class="account-login">
             @section('homelogin')
             @show
            </div>
        </div>
      </div>

    </div>
  </section>
  <script type="text/javascript" src="/static/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
 
  <!-- Main Container End --> 
  <!-- Footer -->
@if(session('error'))
<script>alert("{{session('error')}}")</script>
@endif
  <footer>
   
      
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2016 <a href="#"> MyStore </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>
                <li><a href="#"><img title="Visa" alt="Visa" href="/static/Home/Homelogin/images/visa.png"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" href="/static/Home/Homelogin/images/paypal.png"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" href="/static/Home/Homelogin/images/discover.png"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" href="/static/Home/Homelogin/images/master-card.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="totop"> </a> </div>

<!-- End Footer --> 
<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" href="/static/Home/Homelogin/js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" href="/static/Home/js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" href="/static/Home/js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" href="/static/Home/js/jquery.bxslider.js"></script> 

<!--jquery-slider js --> 
<script type="text/javascript" href="/static/Home/js/slider.js"></script> 

<!-- megamenu js --> 
<script type="text/javascript" href="/static/Home/js/megamenu.js"></script> 
<script type="text/javascript">
        /* <![CDATA[ */   
        var mega_menu = '0';
        
        /* ]]> */
        </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" href="/static/Home/js/mobile-menu.js"></script> 

 

<!--jquery-ui.min js --> 
<script type="text/javascript" href="/static/Home/js/jquery-ui.js"></script> 

<!-- main js --> 
<script type="text/javascript" href="/static/Home/js/main.js"></script> 

 
</body>


</html>
