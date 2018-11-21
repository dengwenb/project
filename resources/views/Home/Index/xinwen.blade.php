@extends('public')
@section('home')
<div id="page"> 
  <section class="blog_post">
    <div class="container">   
      <!-- row -->
      <div class="row"> 
        
        <!-- Center colunm-->
        <div class="col-xs-12 col-sm-9 col-sm-push-3" id="center_column">
          <div class="center_column">
            <div class="page-title">
              <h2>Blog post</h2>
            </div>
            <ul class="blog-posts">
              @foreach($xinwen as $key=>$value)
              <li class="post-item"  num="{{$key}}">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="{{$value->url}}">
                        <figure><img src="{{$value->thumbnail_pic_s}}" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="{{$value->url}}">{{$value->title}}</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; 通过: <a href="#">管理员</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">新闻, </a> <a href="#">{{$value->category}}</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; {{$value->date}}</span> </div>
                      <div class="rating"> 
                        @if($countxing = rand(1,5)) @endif
                        @for($i=1;$i<=5;$i++)
                           @if($i<=$countxing)
                                <i class="fa fa-star"></i>
                           @else
                                <i class="fa fa-star-o"></i>
                           @endif
                        @endfor&nbsp; <span>({{$countxing}} votes)</span></div>
                      <div class="entry-excerpt">{{$value->author_name}}</div>
                      <a href="#" class="button read-more">更多&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              @endforeach
            </ul>
            <div class="sortPagiBar">
              <div class="pagination-area " style="visibility: visible;">
                <ul>
                  <li class="myshow"><a class="active" href="javascript:;">1</a></li>
                  <li class="myshow"><a href="javascript:;">2</a></li>
                  <li class="myshow"><a href="javascript:;">3</a></li>
                  <li style="display:none"><a href="javascript:;">4</a></li>
                  <li style="display:none"><a href="javascript:;">5</a></li>
                  <li style="display:none"><a href="javascript:;">6</a></li>
                  <li class="myshow"><a href="javascript:;" class="not"><i class="fa fa-angle-right"></i></a></li>
                   当前第<span class="mypage">1</span>页 <span> 共10页 </span>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ./ Center colunm --> 
        <!-- Left colunm -->
        <aside class="sidebar col-xs-12 col-sm-3 col-sm-pull-9"> 
          <!-- Blog category -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>新闻 分类</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered layered-category">
                <div class="layered-content">
                  <ul class="tree-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; 推荐</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=shehui">社会</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=guonei">国内</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=guoji">国际</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=yule">娱乐</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=tiyu">体育</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=junshi">军事</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=keji">科技</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=caijing">财经</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="/create?type=shishang">时尚</a></li>
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./blog category  --> 
          <!-- Popular Posts -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Popular Posts</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="blog-list-sidebar">
                    <li>
                      <div class="post-thumb"> <a href="#"><img src="/static/Home/images/blog-img1.jpg" alt="Blog"></a> </div>
                      <div class="post-info">
                        <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                        <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                      </div>
                    </li>
                    <li>
                      <div class="post-thumb"> <a href="#"><img src="/static/Home/images/blog-img2.jpg" alt="Blog"></a> </div>
                      <div class="post-info">
                        <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                        <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                      </div>
                    </li>
                    <li>
                      <div class="post-thumb"> <a href="#"><img src="/static/Home/images/blog-img3.jpg" alt="Blog"></a> </div>
                      <div class="post-info">
                        <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                        <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Popular Posts --> 
          
          <!-- Recent Comments -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Recent Comments</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="recent-comment-list">
                    <li>
                      <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                      <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                      <div class="author">Posted by <a href="#">Admin</a></div>
                    </li>
                    <li>
                      <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                      <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                      <div class="author">Posted by <a href="#">Admin</a></div>
                    </li>
                    <li>
                      <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                      <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                      <div class="author">Posted by <a href="#">Admin</a></div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Recent Comments --> 
          <!-- tags -->
          <div class="popular-tags-area block">
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
          <div class="single-img-add sidebar-add-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="/static/Home/images/add-slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">shopping Now</a> </div>
                </div>
                <div class="item"> <img src="/static/Home/images/add-slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Smartwatch Collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">All Collection</a> </div>
                </div>
                <div class="item"> <img src="/static/Home/images/add-slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Summer Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              
              <!-- Controls --> 
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
          <!-- ./Banner --> 
        </aside>
        <!-- ./left colunm --> 
      </div>
      <!-- ./row--> 
    </div>
  </section>
  <script type="text/javascript" src="/static/Admin/public/jquery-1.7.2.min.js"></script>
<script>
  $('li.post-item').each(function(){
      if($(this).attr('num')>4){
         $(this).hide();
      }
    
  })

  $('a.not').click(function(){
  	if($(this).html()=='<i class="fa fa-angle-right"></i>'){
  	   $(this).parents('li').siblings().show();
  	   $(this).html('<i class="fa fa-angle-left"></i>');
  	}else{
  		$(this).parents('li').siblings().not('.myshow').hide();
  	   $(this).html('<i class="fa fa-angle-right"></i>');
  	}
  })

  $('div.pagination-area').find('a').not('.not').click(function(){
  	$(this).addClass("active");
  	$(this).parents('li').siblings().find('a').removeClass("active");

    var click = $(this).html();
    $('span.mypage').html(click);
     $('li.post-item').each(function(){
      if($(this).attr('num')>(5*(parseInt(click)))){
         $(this).hide();
      }else if($(this).attr('num')<=(5*(parseInt(click)-1))){
         $(this).hide();
      }else{
        $(this).show();
      }
    
  })
})
</script>

@endsection
@section('title','商城首页')
