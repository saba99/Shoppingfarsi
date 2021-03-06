 
@extends('main.scripts')
@extends('main.linkcss')
   
  <body class="">
    
    <div class="master-wrapper">
     
    <!--  ==========  -->
    <!--  = Header =  -->
    @include('main.header')
    
    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">وبمارکت</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.html">فروشگاه</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.html">قالب بندی اصلی</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">
                        
                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                        	<h3><span class="light">بر اساس فیلتر</span> خرید کنید</h3>
                        </div>
                        
                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">دسته بندی ها <b class="caret"></b></a>
                            </div>
                            <div id="filterOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <a href="#" data-target=".filter--accessories" class="selectable"><i class="box"></i> لوازم شخصی</a>
<a href="#" data-target=".filter--bags, .filter--hats" class="selectable"><i class="box"></i>کیف و کلاه</a>
<a href="#" data-target=".filter--polo-shirts" class="selectable"><i class="box"></i> تی شرت های پولو</a>
<a href="#" data-target=".filter--shirts" class="selectable"><i class="box"></i> پیراهن</a>
<a href="#" data-target=".filter--shoes, .filter--boots, .filter--trainers" class="selectable"><i class="box"></i> کفش اسپورت و رسمی</a>
<a href="#" data-target=".filter--shorts" class="selectable"><i class="box"></i> لوازم جانبی</a>
<a href="#" data-target=".filter--suits, .filter--blazers" class="selectable"><i class="box"></i> لباس رسمی</a>
<a href="#" data-target=".filter--sunglasses" class="selectable"><i class="box"></i> عینک آفتابی</a>
<a href="#" data-target=".filter--swimwear" class="selectable"><i class="box"></i> لباس شنا</a>
<a href="#" data-target=".filter--trousers, .filter--chinos" class="selectable"><i class="box"></i> شلوار</a>
<a href="#" data-target=".filter--t-shirts, .filter--vests" class="selectable"><i class="box"></i> تی شرت و جلیقه</a>
<a href="#" data-target=".filter--bags" class="selectable"><i class="box"></i> کیف</a>
<a href="#" data-target=".filter--underwear, .filter--socks" class="selectable"><i class="box"></i> زیر پوش و جوراب</a>
 
                                </div>
                            </div>
                        </div> <!-- /categories -->
                        
                        <!--  ==========  -->
                        <!--  = Prices slider =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">قیمت <b class="caret"></b></a>
                            </div>
                            <div id="filterPrices" class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" data-initial="432" class="max-val pull-right" disabled />
                                    <input type="text" data-initial="99" class="min-val" disabled />
                                </div>
                            </div>
                        </div> <!-- /prices slider -->
                        
                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">سایز <b class="caret"></b></a>
                            </div>
                            <div id="filterTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="xs" data-type="size" class="selectable detailed"><i class="box"></i> XS</a>
<a href="#" data-target="s" data-type="size" class="selectable detailed"><i class="box"></i> S</a>
<a href="#" data-target="m" data-type="size" class="selectable detailed"><i class="box"></i> M</a>
<a href="#" data-target="l" data-type="size" class="selectable detailed"><i class="box"></i> L</a>
<a href="#" data-target="xl" data-type="size" class="selectable detailed"><i class="box"></i> XL</a>
<a href="#" data-target="xxl" data-type="size" class="selectable detailed"><i class="box"></i> XXL</a>
 
                                </div>
                            </div>
                        </div> <!-- /size filter -->
                        
                        <!--  ==========  -->
                        <!--  = Color filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">رنگ <b class="caret"></b></a>
                            </div>
                            <div id="filterThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="red" data-type="color" class="selectable detailed"><i class="box"></i> قرمز</a>
<a href="#" data-target="green" data-type="color" class="selectable detailed"><i class="box"></i> سبز</a>
<a href="#" data-target="blue" data-type="color" class="selectable detailed"><i class="box"></i> آبی</a>
<a href="#" data-target="pink" data-type="color" class="selectable detailed"><i class="box"></i> صورتی</a>
<a href="#" data-target="purple" data-type="color" class="selectable detailed"><i class="box"></i> بنفش</a>
<a href="#" data-target="orange" data-type="color" class="selectable detailed"><i class="box"></i> نارنجی</a>
 
                                </div>
                            </div>
                        </div> <!-- /color filter -->
                        
                        <!--  ==========  -->
                        <!--  = Brand filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">برند <b class="caret"></b></a>
                            </div>
                            <div id="filterFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="s-oliver" data-type="brand" class="selectable detailed"><i class="box"></i> S. Oliver</a>
<a href="#" data-target="nike" data-type="brand" class="selectable detailed"><i class="box"></i> Nike</a>
<a href="#" data-target="naish" data-type="brand" class="selectable detailed"><i class="box"></i> Naish</a>
<a href="#" data-target="adidas" data-type="brand" class="selectable detailed"><i class="box"></i> Adidas</a>
<a href="#" data-target="puma" data-type="brand" class="selectable detailed"><i class="box"></i> Puma</a>
<a href="#" data-target="shred" data-type="brand" class="selectable detailed"><i class="box"></i> Shred</a>
 
                                </div>
                            </div>
                        </div> <!-- /brand filter -->
                        
                        <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> حذف همه فیلتر ها</a>
                        
                    </div>
                </aside> <!-- /sidebar -->
                
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">
                    
                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span5">
                                <h3><span class="light">همه</span> محصولات</h3>
                            </div>
                            <div class="span4">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">چینش :</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value='{"sortBy":"price", "sortAscending":"true"}'>بر اساس قیمت (کم به زیاد) &uarr;</option>
                                        <option value='{"sortBy":"price", "sortAscending":"false"}'>بر اساس قیمت (زیاد به کم) &darr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"true"}'>بر اساس نام (صعودی) &uarr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"false"}'>بر اساس نام (نزولی) &darr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"true"}'>بر اساس محبوبیت (کم به زیاد) &uarr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"false"}'>بر اساس محبوبیت (زیاد به کم) &darr;</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /title -->
                    
                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container">
                    	    
                    	    
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--blazers" data-price="1567" data-popularity="2" data-size="xs|s|m|xl" data-color="pink" data-brand="adidas">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">تمام شد</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-1.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1567</h4>
                    	                <h5 class="no-margin isotope--title">Adipiscing Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--swimwear" data-price="323" data-popularity="3" data-size="xs|s|m|xxl" data-color="pink|orange" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-2.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$323</h4>
                    	                <h5 class="no-margin isotope--title">Dapibus Feugiat</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--chinos" data-price="1475" data-popularity="1" data-size="l|xxl" data-color="pink|orange" data-brand="naish">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">جدید</div>
                	                 
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-3.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1475</h4>
                    	                <h5 class="no-margin isotope--title">Sit Vel Eros</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--accessories" data-price="738" data-popularity="4" data-size="l|xl" data-color="red" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-4.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$738</h4>
                    	                <h5 class="no-margin isotope--title">Ipsum Dapibus Feugiat Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shorts" data-price="32" data-popularity="3" data-size="xs|l|xl|xxl" data-color="green" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-5.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$32</h4>
                    	                <h5 class="no-margin isotope--title">Sit Nisi Duis</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--boots" data-price="334" data-popularity="3" data-size="l|xxl" data-color="green|orange" data-brand="puma">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-6.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$334</h4>
                    	                <h5 class="no-margin isotope--title">Vel Adipiscing Ac Sit Feugiat</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--underwear" data-price="1052" data-popularity="5" data-size="s|l|xxl" data-color="red" data-brand="s-oliver">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-7.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1052</h4>
                    	                <h5 class="no-margin isotope--title">Amet Vivamus Vel Felis Feugiat</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--bags" data-price="1302" data-popularity="4" data-size="s|m|xxl" data-color="pink" data-brand="s-oliver">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-8.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1302</h4>
                    	                <h5 class="no-margin isotope--title">Amet Nisi Vulputate</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--accessories" data-price="1276" data-popularity="3" data-size="xs|s" data-color="green|purple" data-brand="naish">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-9.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1276</h4>
                    	                <h5 class="no-margin isotope--title">Adipiscing Elit Duis Dapibus</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shoes" data-price="1435" data-popularity="1" data-size="xs|m" data-color="blue" data-brand="shred">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">جدید</div>
                	                 
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-10.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1435</h4>
                    	                <h5 class="no-margin isotope--title">Lorem Amet Felis</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--polo-shirts" data-price="895" data-popularity="3" data-size="xs|m" data-color="red|blue" data-brand="nike">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-11.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$895</h4>
                    	                <h5 class="no-margin isotope--title">Adipiscing Felis</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="9" data-popularity="2" data-size="xs|m|xl|xxl" data-color="red|purple" data-brand="naish">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">تمام شد</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-12.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$9</h4>
                    	                <h5 class="no-margin isotope--title">Lorem Consectetur Est</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--blazers" data-price="188" data-popularity="3" data-size="s|xl|xxl" data-color="blue" data-brand="nike">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-13.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$188</h4>
                    	                <h5 class="no-margin isotope--title">Dolor Consectetur Tincidunt Nisi Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="536" data-popularity="3" data-size="xs|l|xl|xxl" data-color="purple" data-brand="naish">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-14.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$536</h4>
                    	                <h5 class="no-margin isotope--title">Lorem Eros</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shorts" data-price="1747" data-popularity="4" data-size="xs|m|xl" data-color="green|purple" data-brand="nike">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-15.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1747</h4>
                    	                <h5 class="no-margin isotope--title">Amet Vel Adipiscing Nisi Dapibus</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shorts" data-price="14" data-popularity="2" data-size="xs|m|l|xxl" data-color="red|pink" data-brand="puma">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-16.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$14</h4>
                    	                <h5 class="no-margin isotope--title">Elit Vel</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--chinos" data-price="1142" data-popularity="3" data-size="xs|s|m" data-color="green|purple" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-17.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1142</h4>
                    	                <h5 class="no-margin isotope--title">Elit Vel</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--blazers" data-price="1421" data-popularity="5" data-size="s|l|xl|xxl" data-color="red" data-brand="puma">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-18.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1421</h4>
                    	                <h5 class="no-margin isotope--title">Vivamus Dapibus Condimentum</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="9" data-popularity="2" data-size="xl|xxl" data-color="green" data-brand="adidas">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-19.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$9</h4>
                    	                <h5 class="no-margin isotope--title">Nisi Duis Sit Condimentum Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--accessories" data-price="55" data-popularity="4" data-size="l|xxl" data-color="red" data-brand="puma">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-20.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$55</h4>
                    	                <h5 class="no-margin isotope--title">Consectetur Sed Ac Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--accessories" data-price="1719" data-popularity="3" data-size="xs|s|l|xl" data-color="blue|pink" data-brand="shred">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-21.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1719</h4>
                    	                <h5 class="no-margin isotope--title">Vel Ac Est Condimentum</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--swimwear" data-price="1457" data-popularity="3" data-size="xs|xxl" data-color="blue|purple" data-brand="shred">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-22.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1457</h4>
                    	                <h5 class="no-margin isotope--title">Vulputate Condimentum</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--hats" data-price="200" data-popularity="4" data-size="xs|s|l" data-color="green|pink" data-brand="naish">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-23.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$200</h4>
                    	                <h5 class="no-margin isotope--title">Neque Vel Dapibus Eros Metus</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--vests" data-price="166" data-popularity="2" data-size="xs|s|l|xxl" data-color="blue|orange" data-brand="adidas">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-24.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$166</h4>
                    	                <h5 class="no-margin isotope--title">Elit Vel Vel Vulputate Est</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--bags" data-price="1238" data-popularity="3" data-size="xs|m" data-color="orange" data-brand="puma">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-25.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1238</h4>
                    	                <h5 class="no-margin isotope--title">Tincidunt Vel Felis Condimentum</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="1049" data-popularity="2" data-size="s|xxl" data-color="green|purple" data-brand="puma">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-26.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1049</h4>
                    	                <h5 class="no-margin isotope--title">Lorem Vel Ac</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--accessories" data-price="161" data-popularity="4" data-size="xs|s|m" data-color="purple" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-27.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$161</h4>
                    	                <h5 class="no-margin isotope--title">Ipsum Sed Eros Metus</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="829" data-popularity="5" data-size="xs|m|l" data-color="purple" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-28.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$829</h4>
                    	                <h5 class="no-margin isotope--title">Vel Amet</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--bags" data-price="1109" data-popularity="2" data-size="m|l|xxl" data-color="green|pink" data-brand="puma">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-29.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1109</h4>
                    	                <h5 class="no-margin isotope--title">Vel Neque Nisi Metus</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--sunglasses" data-price="1228" data-popularity="2" data-size="s|l|xl|xxl" data-color="blue|orange" data-brand="nike">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">Sold</div>
            	                     
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-30.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1228</h4>
                    	                <h5 class="no-margin isotope--title">Lorem Adipiscing</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--hats" data-price="1377" data-popularity="1" data-size="s|xxl" data-color="orange" data-brand="shred">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">New</div>
                	                 
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-31.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1377</h4>
                    	                <h5 class="no-margin isotope--title">Vivamus Adipiscing Felis Duis Est</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--boots" data-price="998" data-popularity="1" data-size="xl|xxl" data-color="green|blue" data-brand="naish">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">جدید</div>
                	                 
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-32.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$998</h4>
                    	                <h5 class="no-margin isotope--title">Neque Sed</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--shirts" data-price="1649" data-popularity="1" data-size="xs|s|l" data-color="red" data-brand="naish">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">New</div>
                	                 
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-33.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1649</h4>
                    	                <h5 class="no-margin isotope--title">Tincidunt Vulputate</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--underwear" data-price="294" data-popularity="3" data-size="m|l|xl" data-color="orange" data-brand="shred">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-34.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$294</h4>
                    	                <h5 class="no-margin isotope--title">Ipsum Amet Amet</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                	        <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                    	    <div class="span3 filter--t-shirts" data-price="1178" data-popularity="4" data-size="xs|m|xl|xxl" data-color="red|pink" data-brand="adidas">
                    	        <div class="product">
                    	             
                    	            <div class="product-img">
                    	                <div class="picture">
                    	                    <img width="540" height="374" alt="" src="{{asset('webmarket/images/dummy/products/product-35.jpg')}}" />
                    	                    <div class="img-overlay">
                    	                        <a class="btn more btn-primary" href="#">توضیحات بیشتر</a>
                    	                        <a class="btn buy btn-danger" href="#">اضافه به سبد خرید</a>
                    	                    </div>
                    	                </div>
                    	            </div>
                    	            <div class="main-titles no-margin">
                    	                <h4 class="title">$1178</h4>
                    	                <h5 class="no-margin isotope--title">Est Metus Ut</h5>
                    	            </div>
                    	            <p class="center-align stars">
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star stars-clr"></span>
                    	                <span class="icon-star"></span>
                    	                 
                    	            </p>
                    	        </div>
                    	    </div> <!-- /single product -->
                    	     
                    	    
                    	</div>
                	</div>
                	<hr />
                </section> <!-- /main content -->
            </div>
        </div>
    </div> <!-- /container -->
    
     
    
     
    <!--  ==========  -->
    <!--  = Footer =  -->
    <!--  ==========  -->
     @include('main.footer')
    <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->
    
  @include('main.modalwindows')
     
    </div> <!-- end of master-wrapper -->
    


    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->
    
    <!--  = FB =  -->
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
    <!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="public/webmarket/js/jquery.min.js"><\/script>');
    }
    </script>
    
    <!--  = _ =  -->
    @section('footer')
		
	@endsection
  </body>
</html>

    
    