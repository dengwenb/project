@extends('Home.blog')
@section('content')
<section class="blog_post"> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-xs-12 col-sm-9"> 

       <div class="entry-detail"> 
        <div class="page-title"> 
         <h1>{{$data->title}}</h1> 
        </div> 
        <div class="entry-photo"> 
         <figure>
          <img src="{{$data->path}}" alt="Blog" />
         </figure> 
        </div> 
        <div class="entry-meta-data"> 
         <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
         <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> 
         <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; {{$data3}} </span> 
         <span class="date"><i class="fa fa-calendar">&nbsp;</i>&nbsp; 2015-08-05</span> 
         <div class="rating"> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star"></i> 
          <i class="fa fa-star-o"></i>&nbsp; 
          <span>(5 votes)</span>
         </div> 
        </div> 
        <div class="content-text clearfix"> 
         <p>{{$data->content}}</p> 
         <blockquote>
           Lorem ipsum dolor sit amet, verenam operibus furiam conclusoque sponte profundo. Conservus mihi esse haec aliquam inlido laetare quod eam ad per. Antiochia videns quia quod non ait est Apollonius non dum animae tertio eam ad te princeps ea docentur Hellenicus ut diem finito convocatis secessit civitatis civium takimata. Parem luctu gubernatori usque vero rex Dionysiadi me missam ne alicuius altum pervenit est amet amet Cur meae. 
         </blockquote> 
         <p>{{$data->content}} </p> 
        </div> 
        <div class="entry-tags"> 
         <span>Tags:</span> 
         <a href="#">beauty,</a> 
         <a href="#">medicine,</a> 
         <a href="#">health</a> 
        </div> 
       </div> 

       <!-- Related Posts --> 
       <div class="single-box"> 
        <h2>Related Posts</h2> 
        <div class="slider-items-products"> 
         <div id="related-posts" class="product-flexslider hidden-buttons"> 
          <div class="slider-items slider-width-col4 fadeInUp"> 
          @foreach($data1 as $row)
           <div class="product-item"> 
            <article class="entry"> 
             <div class="entry-thumb image-hover2"> 
              <a href="#"> <img src="{{$row->path}}" alt="Blog" /> </a> 
             </div> 
             <div class="entry-info"> 
              <h3 class="entry-title"><a href="#">Qui ut ceteros comprehensam</a></h3> 
              <div class="entry-meta-data"> 
               <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 1 </span> 
               <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-05 </span> 
              </div> 
              <div class="entry-more"> 
               <a href="#">Read more</a> 
              </div> 
             </div> 
            </article> 
           </div> 
           @endforeach
          </div> 
         </div> 
        </div> 
       </div> 
       <!-- ./Related Posts --> 
       <!-- Comment --> 
       <div class="single-box"> 
        <h2 class="">Comments</h2> 
        <div class="comment-list"> 
         <ul> 
         @foreach($data2 as $rows)
          <li> 
           <div class="avartar"> 
            <img src="/static/home/images/avatar.png" alt="Avatar" /> 
           </div> 
           <div class="comment-body"> 
            <div class="comment-meta"> 
             <span class="author"><a href="#">{{$rows->username}}</a></span> 
             <span class="date">{{date('Y-m-d',$rows->add_time)}}</span> 
            </div> 
            <div class="comment">
              {{$rows->message}} 
            </div> 
           </div> </li> 
           @endforeach
         </ul> 
        </div> 
       </div> 
       <div class="single-box comment-box"> 
        <h2>留下评论</h2> 
        <form action="/Message/{{$data->id}}" method="post">
        <div class="coment-form"> 
         <p>确保你输入了（）所需的信息。不允许使用HTML代码。</p> 
         <div class="row"> 
          <div class="col-sm-6"> 
           <label for="name">姓名</label> 
           <input id="name" type="text" class="form-control" name="username" /> 
          </div> 
          <div class="col-sm-6"> 
           <label for="email">邮箱地址</label> 
           <input id="email" type="text" class="form-control" name="email" /> 
          </div> 
          <!-- <div class="col-sm-12"> 
           <label for="website">Website URL</label> 
           <input id="website" type="text" class="form-control" /> 
          </div> --> 
          <div class="col-sm-12"> 
           <label for="message">评论信息</label> 
           <textarea name="message" id="message" rows="8" class="form-control"></textarea> 
          </div> 
         </div> 
         {{csrf_field()}}
         <button class="button" type="submit"><span>Post Comment</span></button> 
         </form>
        </div> 
       </div> 
       <!-- ./Comment --> 
      </div> 
      <!-- right colunm --> 
      <aside class="right sidebar col-xs-12 col-sm-3"> 
       <!-- Blog category --> 
       <div class="block blog-module"> 
        <p class="title_block">Blog Categories</p> 
        <div class="block_content"> 
         <!-- layered --> 
         <div class="layered layered-category"> 
          <div class="layered-content"> 
           <ul class="tree-menu"> 
            <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; /static/home/images</a></li> 
            <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Audio</a></li> 
            <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Photos</a></li> 
            <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Diet &amp; Fitness</a></li> 
            <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Slider</a></li> 
           </ul> 
          </div> 
         </div> 
         <!-- ./layered --> 
        </div> 
       </div> 
       <!-- ./blog category  --> 
       <!-- Popular Posts --> 
       <div class="block blog-module wow fadeInUp"> 
        <p class="title_block">Popular Posts</p> 
        <div class="block_content"> 
         <!-- layered --> 
         <div class="layered"> 
          <div class="layered-content"> 
           <ul class="blog-list-sidebar"> 
            <li> 
             <div class="post-thumb"> 
              <a href="#"><img src="/static/home/images/blog-img1.jpg" alt="Blog" /></a> 
             </div> 
             <div class="post-info"> 
              <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5> 
              <div class="post-meta"> 
               <span class="date"><i class="fa fa-calendar">&nbsp;</i> 2014-08-05</span> 
               <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 8 </span> 
              </div> 
             </div> </li> 
            <li> 
             <div class="post-thumb"> 
              <a href="#"><img src="/static/home/images/blog-img2.jpg" alt="Blog" /></a> 
             </div> 
             <div class="post-info"> 
              <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5> 
              <div class="post-meta"> 
               <span class="date"><i class="fa fa-calendar">&nbsp;</i> 2014-08-05</span> 
               <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 5 </span> 
              </div> 
             </div> </li> 
            <li> 
             <div class="post-thumb"> 
              <a href="#"><img src="/static/home/images/blog-img3.jpg" alt="Blog" /></a> 
             </div> 
             <div class="post-info"> 
              <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5> 
              <div class="post-meta"> 
               <span class="date"><i class="fa fa-calendar">&nbsp;</i> 2014-08-05</span> 
               <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 1 </span> 
              </div> 
             </div> </li> 
           </ul> 
          </div> 
         </div> 
         <!-- ./layered --> 
        </div> 
       </div> 
       <!-- ./Popular Posts --> 
       <!-- Recent Comments --> 
       <div class="block blog-module wow fadeInUp"> 
        <p class="title_block">Recent Comments</p> 
        <div class="block_content"> 
         <!-- layered --> 
         <div class="layered"> 
          <div class="layered-content"> 
           <ul class="recent-comment-list"> 
            <li> <h5><a href="#">Lorem ipsum dolor sit amet</a></h5> 
             <div class="comment">
               &quot;Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in...&quot; 
             </div> 
             <div class="author">
              Posted by 
              <a href="#">Admin</a>
             </div> </li> 
           </ul> 
          </div> 
         </div> 
         <!-- ./layered --> 
        </div> 
       </div> 
       <!-- ./Recent Comments --> 
       <!-- tags --> 
       <div class="popular-tags-area wow fadeInUp"> 
        <div class="sidebar-bar-title"> 
         <h3>Popular Tags</h3> 
        </div> 
        <div class="tag"> 
         <ul> 
          <li><a href="#">Boys</a></li> 
          <li><a href="#">Camera</a></li> 
          <li><a href="#">good</a></li> 
          <li><a href="#">Computers</a></li> 
          <li><a href="#">Phone</a></li> 
          <li><a href="#">clothes</a></li> 
          <li><a href="#">girl</a></li> 
          <li><a href="#">shoes</a></li> 
          <li><a href="#">women</a></li> 
          <li><a href="#">accessoties</a></li> 
          <li><a href="#">View All Tags</a></li> 
         </ul> 
        </div> 
       </div> 
       <!-- ./tags --> 
       <!-- Banner --> 
       <div class="single-img-add sidebar-add-slider wow fadeInUp"> 
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
         <!-- Indicators --> 
         <ol class="carousel-indicators"> 
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
          <li data-target="#carousel-example-generic" data-slide-to="1"></li> 
          <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
         </ol> 
         <!-- Wrapper for slides --> 
         <div class="carousel-inner" role="listbox"> 
          <div class="item active"> 
           <img src="/static/home/images/add-slide1.jpg" alt="slide1" /> 
           <div class="carousel-caption"> 
            <h3><a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a></h3> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
            <a href="#" class="info">shopping Now</a> 
           </div> 
          </div> 
          <div class="item"> 
           <img src="/static/home/images/add-slide2.jpg" alt="slide2" /> 
           <div class="carousel-caption"> 
            <h3><a href="single_product.html" title=" Sample Product">Smartwatch Collection</a></h3> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
            <a href="#" class="info">All Collection</a> 
           </div> 
          </div> 
          <div class="item"> 
           <img src="/static/home/images/add-slide3.jpg" alt="slide3" /> 
           <div class="carousel-caption"> 
            <h3><a href="single_product.html" title=" Sample Product">Summer Sale</a></h3> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
           </div> 
          </div> 
         </div> 
         <!-- Controls --> 
         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
        </div> 
       </div> 
       <!-- ./Banner --> 
      </aside> 
      <!-- ./right colunm --> 
     </div> 
    </div> 
   </section> 

   <script>

   </script>
@endsection
@section('title','博客详情')