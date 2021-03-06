﻿@extends('public')
@section('home')
    <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="shop_grid.html">Computers</a><span>&raquo;</span></li>
            <li><strong> Camera & Photo</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2> Camera & Photo</h2>
            </div>
            <div class="toolbar column">
              <div class="sorter">
                <div class="short-by">
                  <label>排序:</label>
                  <select>
                    <option selected="selected">地方</option>
                    <option>名字</option>
                    <option>价格</option>
                    <option>销量</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>显示:</label>
                  <select>
                    <option selected="selected">16</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="product-grid-area">
              <ul class="products-grid">
                @foreach($data as $row )
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        @if($row->sales>9)
                        <div class="icon-sale-label sale-left">
                          hot </div>
                        @endif
                        @if ($row->add_time-time() < 50000)
                        <div class="icon-new-label new-right">New</div>
                        @endif
                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="/homeCart">
                          <figure> <img class="first-img" src="{{substr($row->path,1)}}" alt=""> <img class="hover-img" src="{{substr($row->path,1)}}" alt=""></figure>
                          </a>
                          <button type="button" class="add-to-cart-mt" form="tjcart"> <i class="fa fa-shopping-cart"></i><span> 加入购物车</span> </button>
                        </div>
                        <form action="/homeCart" method="get" id="tjcart"></form>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="/homeShop/{{$row->id}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{$row->name}}</a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">{{$row->price}}</span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
               @endforeach
              </ul>
            </div>
            <div class="pagination-area ">
              <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('title','商品页')
