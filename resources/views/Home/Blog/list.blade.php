@extends('Home.blog')
@section('content')
<section class="blog_post"> 
    <div class="container"> 
     <!-- Center colunm--> 
     <div class="blog-wrapper"> 
      <div class="page-title"> 
       <h2>Blog post</h2> 
      </div> 
      <ul class="blog-posts"> 
      @foreach($data as $row)
       <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="/blogpost/{{$row->id}}"> 
             <figure>
              <img src="{{$row->path}}" alt="Blog" width="100px"/>
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="/indexBlog/create" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li>
        @endforeach 
       <!-- <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="single_post.html"> 
             <figure>
              <img src="/static/home/images/blog-img3.jpg" alt="Blog" />
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="#" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li> 
       <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="single_post.html"> 
             <figure>
              <img src="/static/home/images/blog-img4.jpg" alt="Blog" />
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="#" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li> 
       <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="single_post.html"> 
             <figure>
              <img src="/static/home/images/blog-img5.jpg" alt="Blog" />
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="#" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li> 
       <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="single_post.html"> 
             <figure>
              <img src="/static/home/images/blog-img6.jpg" alt="Blog" />
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="#" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li> 
       <li class="post-item col-lg-4"> 
        <article class="entry"> 
         <div class="row"> 
          <div class="col-sm-12"> 
           <div class="entry-thumb image-hover2"> 
            <a href="single_post.html"> 
             <figure>
              <img src="/static/home/images/blog-img7.jpg" alt="Blog" />
             </figure> </a> 
           </div> 
          </div> 
          <div class="col-sm-12"> 
           <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3> 
           <div class="entry-meta-data"> 
            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> 
            <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> 
            <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> 
           </div> 
           <div class="rating"> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star-o"></i> 
            <i class="fa fa-star-o"></i>&nbsp; 
            <span>(5 votes)</span>
           </div> 
           <div class="entry-excerpt">
            Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus. Praesent Ornare Tortor Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.
           </div> 
           <div class="entry-more"> 
            <a href="#" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> 
           </div> 
          </div> 
         </div> 
        </article> </li>  -->
      </ul> 
      <div class="sortPagiBar">
       <div class="pagination-area" style="visibility: visible;"> 
        <ul> 
         <li><a class="active" href="#">1</a></li> 
         <li><a href="#">2</a></li> 
         <li><a href="#">3</a></li> 
         <li><a href="#"><i class="fa fa-angle-right"></i></a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <!-- ./ Center colunm --> 
    </div> 
   </section> 

@endsection
@section('title','博客列表')