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
           {{--@foreach($product->categories   as $category)--}}
          {{--{{$category->name}}--}}
          {{--{{$category->name}}--}}
             @foreach($categories as $category)
            <li class="dropdown">
             <a href="{{route('category.index',['id'=>4,'page'=>1])}}">{{$category->name}}</a> 
               {{--<a href="{{route('category.index',[$category->id,$category->page])}}">{{$category->name}}</a>--}}
              <div class="dropdown-menu">
              <ul>                           {{-----}}
                      <li><a href=""><span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href=""> </a> </li>
                            <li><a href="category.html">زیردسته ها </a> </li>
                            <li><a href="category.html">زیردسته ها </a> </li>
                            <li><a href="category.html">زیردسته ها </a> </li>
                            <li><a href="category.html">زیردسته جدید </a> </li>
                          </ul>
                        
                        </div>
                      </li>
                      <li><a href="category.html" >بانوان</a> </li>
                      <li><a href="category.html">دخترانه<span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="category.html">زیردسته ها </a></li>
                            <li><a href="category.html">زیردسته جدید</a></li>
                            <li><a href="category.html">زیردسته جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="category.html">پسرانه</a></li>
                      <li><a href="category.html">نوزاد</a></li>
                      <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="category.html">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
              </div>
              @endforeach
              
              
            </li>
              {{--@endforeach--}}
                  {{--@foreach($product->categories as $category)--}} 
                  {{--{{$category->name}}--}}
                <li class="dropdown"><a href="category.html">پوشاک</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li> <a href="category.html">عطر و ادکلن</a></li>
                      <li> <a href="category.html">آرایشی</a></li>
                      <li> <a href="category.html">ضد آفتاب</a></li>
                      <li> <a href="category.html">مراقبت از پوست</a></li>
                      <li> <a href="category.html">مراقبت از چشم</a></li>
                      <li> <a href="category.html">مراقبت از مو</a></li>
                    </ul>
                  </div>
                </li>
              {{--@endforeach--}}
            <li class="menu_brands dropdown"><a href="#">برند</a>
              <div class="dropdown-menu">
               {{--@foreach($brands  as $brand)
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
                  <a href="#">
                    <img src="{{$brand->filename}}"  class="img-responsive"  /></a><a href="#">{{$brand->title}}</a></div>
                
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