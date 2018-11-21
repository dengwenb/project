@extends('public')
@section('home')
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>Sitemap </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Sitemap  -->
  <section class="container">
    
    <div class="sitemap-page"><div class="page-title">
      <h5>你当前的位置：{{$myaddress}}</h5>
      <h2>分店地址</h2>
    </div>
    <iframe name="myiframe" id="myrame" src="{{$url}}" frameborder="0" align="left" width="100%" height="500" scrolling="no">
            <p>你的浏览器不支持iframe标签</p>
    </iframe>
     <!--  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img class="img-responsive animate scale" src="/static/Home/images/large-icon-sitemap.png" alt=""> </div> -->
    </div>
  </section>
@endsection
@section('title','地图')