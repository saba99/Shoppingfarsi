@extends('frontend.layout.master')


@section('content')

<div id="content" class="col-xs-12">
          <!-- Slideshow Start-->
          
          <div class="slideshow single-slider owl-carousel">
            @foreach($banners as $key=>$banner)
      
            <div class="item" @if($key==0 )active  @endif> 
              <a href="{{$banner->link}}"><img class="img-responsive" src="{{$banner->image}}"  /></a> 
            </div>
            @endforeach
          </div>
          <!-- Slideshow End-->
          <!-- Banner Start-->
          <div class="marketshop-banner">
           
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
        
         @foreach($latestProduct as $product)
<div class="product-thumb clearfix">
              <div class="image"><a href="{{route('product.single', ['slug'=> $product->slug])}}">
            {{--$product->first()->files()->first()->filename--}}
               
                <img src="{{$product->files[0]->filename}}" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">                                    {{--$product->photos[0]->path--}}

                {{--$product->files[0]->filename--}}
                <h4><a href="{{route('product.single',['slug'=>$product->slug])}}">{{$product->title}}</a></h4>
               
                @if($product->discount)
                <p class="price"><span class="price-new">{{$product->discount}}</span> <span class="price-old">{{$product->price}}</span><span class="saving">{{round(abs($product->price-$product->discount*100)/($product->price))}} %</span></p>
                
                @else 
                 <p class="price"> {{$product->price}}</p>
                 @endif
              </div>
              <div class="button-group">
                <a class="btn-primary" type="button" href="{{route('cart.add',['id'=>$product->id])}}"><span>افزودن به سبد</span></a>

                
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
            <h3 class="subtitle">مد و زیبایی - <a class="viewall" href="{{route('product.single',['slug'=>$product->slug])}}">نمایش همه</a></h3>
            <div class="category-module-content">
              <ul id="sub-cat" class="tabs">
                <li><a href="#tab-cat1">مد و پوشاک</a></li>
                <li><a href="#tab-cat2">کالای دیجیتال</a></li>
                <li><a href="#tab-cat3">خانه و آشپز خانه</a></li>
                <li><a href="#tab-cat4">کتاب و هنر</a></li>
                <li><a href="#tab-cat5">ورزش و سفر</a></li>
                <li><a href="#tab-cat6">خودرو و ابزار اداری</a></li>
              </ul>
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  @foreach($productCategory as $pc)
                  <div class="product-thumb">
                    <div class="image"><a href="{{route('product.single',['slug'=>$pc->slug])}}">
                      <img src="{{$pc->files[0]->filename}}" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="{{route('product.single',['slug'=>$pc->slug])}}">{{$pc->title}}</a></h4>
                      @if($pc->discount)
                <p class="price"><span class="price-new">{{$pc->discount}}</span>
                   <span class="price-old">{{$pc->price}}</span><span class="saving">
                     {{round(abs($pc->price-$pc->discount*100)/($pc->price))}} %</span></p>
                
                @else 
                 <p class="price"> {{$pc->price}}</p>
                 @endif
                      <div class="rating">
                         <span class="fa fa-stack">
                           <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              <div id="tab-cat2" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                   @foreach($productCategorytab2 as $pc2)
                  <div class="product-thumb">
                    <div class="image">
                    <a href="{{route('product.single',['slug'=>$pc2->slug])}}">
                      <img src="{{$pc2->files[0]->filename}}" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                    <div class="caption">
                     <h4><a href="{{route('product.single',['slug'=>$pc2->slug])}}">{{$pc2->title}}</a></h4>
               
                @if($product->discount)
                <p class="price"><span class="price-new">{{$pc2->discount}}</span> 
                  <span class="price-old">{{$pc2->price}}</span>
                  <span class="saving">{{round(abs($pc2->price-$pc2->discount*100)/($pc2->price))}} %</span></p>
                
                @else 
                 <p class="price"> {{$pc2->price}}</p>
                 @endif
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div> 

                   @endforeach

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
          <h3 class="subtitle">کالای دیجیتال - <a class="viewall" href="category.html">نمایش همه</a></h3>
          <div class="owl-carousel latest_category_carousel">
            @foreach($productCategorytab2 as $pc2)
            <div class="product-thumb">
              <div class="image">
                <a href="{{route('product.single',['slug'=>$pc2->slug])}}">
                  <img src="{{$pc2->files[0]->filename}}" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{route('product.single',['slug'=>$pc2->slug])}}">{{$pc2->title}}</a></h4>
                @if($pc2->discount)
                <p class="price"><span class="price-new">{{$pc2->discount}}</span> <span class="price-old">{{$pc2->price}}</span>
                  <span class="saving">{{round(abs($pc2->price-$pc2->discount*100)/($pc2->price))}} %</span></p>
                
                @else 
                 <p class="price"> {{$pc2->price}}</p>
                 @endif
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
            @endforeach
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
           
         
          </div>
          <!-- دسته ها محصولات Slider End -->
          
          <!-- برند Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
@foreach($brands as $brand)

 <div class="item text-center">
    <a href="#">
      <img src="{{$brand->filename}}"  class="img-responsive" /></a> </div>
                                                     {{--{{$brand->photo->path}}--}}    {{--{{$brand->files->filenmae}}--}} 
           @endforeach

          </div>
          <!-- برند Logo Carousel End -->
        </div>

@endsection 