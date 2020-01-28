 
 
@extends('main.scripts')
@extends('main.linkcss')
  
   
  <body class="">
    
    <div class="master-wrapper">
     
    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
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
                            <a href="shop-search.html">Search Results for &quot;Horsefeathers&quot;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 left-sidebar">
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
                        <div class="accordion-group">
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
                                    <input type="text" data-initial="432" class="max-val span1 pull-right" disabled />
                                    <input type="text" data-initial="99" class="min-val span1" disabled />
                                </div>
                            </div>
                        </div> <!-- /prices slider -->
                        
                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
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
                <section class="span9 blocks-spacer">
                    
                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span5">
                                <h3><span class="light">جستجو:</span> &quot;Horsefeathers&quot;</h3>
                            </div>
                            <div class="span4">
                                <div class="form-inline sorting-by">
                                    <label for="isotopeSorting" class="black-clr">چینش:</label>
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
                    	    <div class="span3 filter--sunglasses" data-price="591" data-popularity="5" data-size="xs|s|l|xxl" data-color="purple|orange" data-brand="adidas">
                    	        <div class="product">
                    	             
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
                    	                <h4 class="title">$591</h4>
                    	                <h5 class="no-margin isotope--title">Sed Dapibus</h5>
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
                    	    <div class="span3 filter--shorts" data-price="1516" data-popularity="1" data-size="s|l|xxl" data-color="red|blue" data-brand="nike">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">جدید</div>
                	                 
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
                    	                <h4 class="title">$1516</h4>
                    	                <h5 class="no-margin isotope--title">Vivamus Felis Dapibus Metus Ut</h5>
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
                    	    <div class="span3 filter--trousers" data-price="1087" data-popularity="4" data-size="xs|s|l|xl" data-color="pink|orange" data-brand="naish">
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
                    	                <h4 class="title">$1087</h4>
                    	                <h5 class="no-margin isotope--title">Nisi Est</h5>
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
                    	    <div class="span3 filter--bags" data-price="363" data-popularity="5" data-size="s|m|xxl" data-color="pink" data-brand="puma">
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
                    	                <h4 class="title">$363</h4>
                    	                <h5 class="no-margin isotope--title">Dolor Tincidunt</h5>
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
                    	    <div class="span3 filter--swimwear" data-price="554" data-popularity="2" data-size="m|xl" data-color="red" data-brand="s-oliver">
                    	        <div class="product">
                    	             
                	                    <div class="stamp red">تمام شد</div>
            	                     
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
                    	                <h4 class="title">$554</h4>
                    	                <h5 class="no-margin isotope--title">Tincidunt Sed Duis Dapibus Eros</h5>
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
                    	    <div class="span3 filter--socks" data-price="1081" data-popularity="1" data-size="s|xxl" data-color="blue" data-brand="s-oliver">
                    	        <div class="product">
                    	             
                    	                <div class="stamp green">جدید</div>
                	                 
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
                    	                <h4 class="title">$1081</h4>
                    	                <h5 class="no-margin isotope--title">Adipiscing Vel Amet</h5>
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
                    	    <div class="span3 filter--polo-shirts" data-price="30" data-popularity="5" data-size="m|xl" data-color="green" data-brand="nike">
                    	        <div class="product">
                    	             
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
                    	                <h4 class="title">$30</h4>
                    	                <h5 class="no-margin isotope--title">Ipsum Dolor Adipiscing Elit Neque</h5>
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
                    	    <div class="span3 filter--accessories" data-price="978" data-popularity="4" data-size="xs|m|xl" data-color="pink|purple" data-brand="naish">
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
                    	                <h4 class="title">$978</h4>
                    	                <h5 class="no-margin isotope--title">Ipsum Consectetur Sed Amet Condimentum</h5>
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

    
    