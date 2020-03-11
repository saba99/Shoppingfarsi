@extends('frontend.layout.master')


@section('content')
<div id="header">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                  <div class="dropdown-menu custom_block">
                    <ul>
                      <li>
                        <table>
                          <tbody>
                            <tr>
                              <td><img alt="" src="/image/banner/cms-block.jpg"></td>
                              <td><img alt="" src="/image/banner/responsive.jpg"></td>
                            </tr>
                            <tr>
                              <td><h4>بلاک های محتوا</h4></td>
                              <td><h4>قالب واکنش گرا</h4></td>
                            </tr>
                            <tr>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                            </tr>
                            <tr>
                              <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                              <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div id="language" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                </li>
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>
                </li>
              </ul>
            </div>
            <div id="currency" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                </li>
              </ul>
            </div>
          </div>
          <div id="top-links" class="nav pull-right flip">

            @if(Auth::check())
             <ul>
               <li><a href="{{route('user.profile')}}">پروفایل کاربری</a></li>
               <li><a href="{{route('logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a></li>
                                       
             </ul>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            @else 
              <ul>
              <li><a href="{{route('login')}}">ورود</a></li>
              <li><a href="{{route('register')}}">ثبت نام</a></li>
            </ul>

            @endif
          </div>
        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="{{route('homePage')}}"><img class="img-responsive" src="/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart"> 
              
              <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle">
              <span class="cart-icon pull-left flip"></span>
           
              <span id="cart-total">{{Session::has('cart') ? Session::get('cart')->totalQty.'آیتم': 0}}  {{Session::has('cart') ? Session::get('cart')->totalPrice.'تومان': ''}}</span></button>

              
              <ul class="dropdown-menu">
                @if(Session::has('cart'))
               
                <li>
                  <table class="table">
                     @foreach(Session::get('cart')->items as $product)
                    <tbody>
                      <tr>
                        <td class="text-center" style="width:18%"><a href="product.html"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="{{$product['item']->files[0]->filename}}"></a></td>
                        <td class="text-left"><a href="product.html">{{$product['item']->title}}</a></td>
                        <td class="text-right">x {{$product['qty']}}</td>
                        <td class="text-right">{{$product['item']->price}}</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="event.preventDefault();
                            
                          document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();" type="button"><i class="fa fa-times"></i></button></td>

                                 <form id="remove-cart-item" action="{{ route('cart.remove',['id'=>$product['item']->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      </tr>
                   
                    </tbody> @endforeach
                  </table>
                </li>
               <li>
                  <div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>جمع کل</strong></td>
                          <td class="text-right">{{Session::get('cart')->totalPurePrice}}تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>کسر هدیه</strong></td>
                          <td class="text-right">{{Session::get('cart')->totalDiscountPrice}}تومان</td>
                        </tr>
                       @if(Auth::check() && Session::get('cart')->couponDiscount)
                      
                          <td class="text-right"><strong>{{Session::get('cart')->couponDiscount->coupon->title}}</strong></td>
                          <td class="text-right">{{Session::get('cart')->couponDiscount}}تومان</td>
                        </tr> 
                        @endif
                        <tr>
                          <td class="text-right"><strong>قابل پرداخت</strong></td>
                          <td class="text-right">{{Session::get('cart')->totalPrice}}تومان</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="checkout"><a href="{{route('cart.Cart')}}" class="btn btn-primary"><i class="fa fa-shopping-cart">
                      </i> مشاهده سبد</a>
                      </p>
                  </div>
                </li>
               
                @else 
                      
              <p>سبد خرید شما خالی است</p>
              </ul>

              @endif

            </div>
          </div>
          <!-- Mini Cart End-->
          <!-- جستجو Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <!-- جستجو End-->
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main آقایانu Start-->
    
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="{{route('homePage')}}">خانه</a></li>
        
           
              
               {{--<a href="{{route('category.index',[$category->id,$category->page])}}">{{$category->name}}</a>--}}
              
                     @foreach($categories as $category)
                <li class="dropdown">
                  <a href="{{route('category.index',['id'=>4,'page'=>1])}}">{{$category->name}}</a>
                  <div class="dropdown-menu">
                 
                    <ul>
                     
                     <li>
				                    
				                    @if(count($category->childrenRecursive))
				                        @include('partials.manageChild',['childs' => $category->childrenRecursive])
				                    @endif
				                </li>
                    </ul>
                  </div>
                </li>
              
             @endforeach
            <li class="menu_brands dropdown"><a href="#">برند</a>
              <div class="dropdown-menu">
              {{--@foreach($brands  as $brand)
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
                  <a href="#">
                    <img src="{{$brand->filename}}" class="img-responsive"  /></a><a href="#">{{$brand->title}}</a></div>
                
                @endforeach--}} 
                 <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
                  <a href="#">
                    <img src=""  class="img-responsive"  /></a><a href="#"></a></div>
              </div>
            </li>
            <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
              <div class="dropdown-menu custom_block">
                <ul>
                  <li>
                    <table>
                      <tbody>
                        <tr>
                          <td><img alt="" src="/image/banner/cms-block.jpg"></td>
                          <td><img alt="" src="/image/banner/responsive.jpg"></td>
                          <td><img alt="" src="/image/banner/cms-block.jpg"></td>
                        </tr>
                        <tr>
                          <td><h4>بلاک های محتوا</h4></td>
                          <td><h4>قالب واکنش گرا</h4></td>
                          <td><h4>پشتیبانی ویژه</h4></td>
                        </tr>
                        <tr>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                        </tr>
                        <tr>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                </ul>
              </div>
            </li>
            <li class="dropdown information-link"><a href="{{route('all.product')}}">محصولات</a>
              <div class="dropdown-menu">
                <ul>
                  <li><a>لیست محصولات</a></li>
                  <li><a href="{{route('register')}}">ثبت نام</a></li>
                 
                </ul>
                
              </div>
            </li>
            <li class="custom-link-right"><a href="{{route('cart.index')}}" target="_blank"> همین حالا بخرید!</a></li>
          </ul>
        </div>
        </div>
      </nav>
    
    <!-- Main آقایانu End-->
  </div>
<div id="container">
    
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
          </div>
          <!-- Slideshow End-->
          <!-- Banner Start-->
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-3-300x300.jpg" alt="بنر نمونه 2" title="بنر نمونه 2" /></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-1-300x300.jpg" alt="بنر نمونه" title="بنر نمونه" /></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-2-300x300.jpg" alt="بنر نمونه 3" title="بنر نمونه 3" /></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-4-300x300.jpg" alt="بنر نمونه 4" title="بنر نمونه 4" /></a></div>
            </div>
          </div>
          <!-- Banner End-->
          <!-- محصولات Tab Start -->
          <div id="product-tab" class="product-tab">
  <ul id="tabs" class="tabs">
    <li><a href="#tab-featured">ویژه</a></li>
    <li><a href="#tab-latest">جدیدترین</a></li>
    <li><a href="#tab-bestseller">پرفروش</a></li>
    <li><a href="#tab-special">پیشنهادی</a></li>
  </ul>
  <div id="tab-featured" class="tab_content">
      <div class="owl-carousel product_carousel_tab">
          @foreach($products as $product)
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{route('shop.show',$product->slug)}}">
                  <img src="{{$product->files[0]->filename}}" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">{{----}}
                  {{--{{asset('uploads/'.$product->slug.'.jpg')}}--}}
                <h4><a href="{{route('shop.show',$product->slug)}}">{{$product->title}}</a></h4>
                <p class="price"><span class="price-new">{{$product->price}}</span> <span class="price-old">122000 تومان</span><span class="saving">-10%</span></p>
              </div>
              <div class="button-group">
             
               <a href="{{route('cart.index')}}" id="button-cart" class="btn btn-primary btn-lg">افزودن به سبد</a>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            @endforeach
          
         
          </div>
  </div>
  
  <div id="tab-latest" class="tab_content">
    <div class="owl-carousel product_carousel_tab">
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_2-220x330.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">عطر نینا ریچی</a></h4>
                <p class="price"> 110000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_3-220x330.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">رژ لب گارنیر</a></h4>
                <p class="price"> 123000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_4-220x330.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">عطر گوچی</a></h4>
                <p class="price"> 85000 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/iphone_6-220x330.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">کرم مو آقایان</a></h4>
                <p class="price"> 42300 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-220x330.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/nikon_d300_4-220x330.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                <p class="price"> 88000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href=""><img src="image/product/macbook_5-220x330.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('61');"><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          </div>
  </div>
  <div id="tab-bestseller" class="tab_content">
    <div class="owl-carousel product_carousel_tab">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-220x330.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/nikon_d300_1-220x330.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                      <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
  </div>
  <div id="tab-special" class="tab_content">
    <div class="owl-carousel product_carousel_tab">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_touch_1-220x330.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                      <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
              <div class="image"><a href=""><img src="image/product/macbook_5-220x330.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('61');"><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_air_1-220x330.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                      <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb clearfix">
              <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-220x330.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span><span class="saving">-10%</span></p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('42');"><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-220x330.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-220x330.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">تبلت ایسر</a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
    
  </div>
</div>    <!-- محصولات Tab Start -->
          <!-- Banner Start -->
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-4-600x250.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-5-600x250.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
            </div>
          </div>
          <!-- Banner End -->
          <!-- دسته ها محصولات Slider Start-->
          <div class="category-module" id="latest_category">
            <h3 class="subtitle">مد و زیبایی - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
           
            <div class="category-module-content">
              <ul id="sub-cat" class="tabs">
                <li><a href="#tab-cat1"></a></li>
                <li><a href="#tab-cat2">بانوان</a></li>
                <li><a href="#tab-cat3">دخترانه</a></li>
                <li><a href="#tab-cat4">پسرانه</a></li>
                <li><a href="#tab-cat5">نوزاد</a></li>
                <li><a href="#tab-cat6">لوازم</a></li>
              </ul>
             
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-220x330.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">تبلت ایسر</a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-220x330.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_air_1-220x330.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                      <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_1-220x330.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                      <p class="price"> 211000 تومان </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_shuffle_1-220x330.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_touch_1-220x330.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                      <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-cat2" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_shuffle_1-220x330.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-cat3" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-220x330.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/nikon_d300_1-220x330.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                      <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-cat4" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-220x330.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">تبلت ایسر</a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/iphone_1-220x330.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">آیفون 7</a></h4>
                      <p class="price"> 2200000 تومان </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_touch_1-220x330.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                      <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/palm_treo_pro_1-220x330.jpg" alt="موبایل HTC M7" title="موبایل HTC M7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">موبایل HTC M7</a></h4>
                      <p class="price"> 377000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-cat5" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-220x330.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">تبلت ایسر</a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_classic_1-220x330.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">آیپاد نسل 5</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-220x330.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                      <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_air_1-220x330.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                      <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/macbook_1-220x330.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                      <p class="price"> 211000 تومان </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_nano_1-220x330.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">پخش کننده موزیک</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-220x330.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_shuffle_1-220x330.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick="cart.add('34');"><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('34');"><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_touch_1-220x330.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                      <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/nikon_d300_1-220x330.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                      <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-cat6" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_classic_1-220x330.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">آیپاد نسل 5</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick="cart.add('48');"><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="image/product/ipod_nano_1-220x330.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="product.html">پخش کننده موزیک</a></h4>
                      <p class="price"> 122000 تومان </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- دسته ها محصولات Slider End-->
          
          <!-- دسته ها محصولات Slider Start -->
          <h3 class="subtitle">البسه - <a class="viewall" href="category.html">نمایش همه</a></h3>
          <div class="owl-carousel latest_category_carousel">
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/iphone_6-220x330.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">کرم مو آقایان</a></h4>
                <p class="price"> 42300 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-220x330.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/nikon_d300_4-220x330.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                <p class="price"> 88000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href=""><img src="image/product/macbook_5-220x330.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">ژل حمام بانوان</a></h4>
                <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('61');"><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_4-220x330.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">عطر گوچی</a></h4>
                <p class="price"> 85000 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_3-220x330.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">رژ لب گارنیر</a></h4>
                <p class="price"> 123000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb">
              <div class="image"><a href="product.html"><img src="image/product/macbook_2-220x330.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">عطر نینا ریچی</a></h4>
                <p class="price"> 110000 تومان </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- دسته ها محصولات Slider End -->
          
          <!-- برند Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
          </div>
          <!-- برند Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>
  <!-- Feature Box Start-->
    <div class="container">
      <div class="custom-feature-box row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_1">
            <div class="title">ارسال رایگان</div>
            <p>برای خرید های بیش از 100 هزار تومان</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_2">
            <div class="title">پس فرستادن رایگان</div>
            <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_3">
            <div class="title">کارت هدیه</div>
            <p>بهترین هدیه برای عزیزان شما</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_4">
            <div class="title">امتیازات خرید</div>
            <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Box End-->

@endsection 