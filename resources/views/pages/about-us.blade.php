 
@extends('main.scripts')
@extends('main.linkcss')
   
  <body class="">
    
    <div class="master-wrapper">
     
    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="index.html">
                        <img src="{{asset('webmarket/images/logo.png')}}" alt="Webmarket Logo" width="48" height="48" /> 
                        <span class="pacifico">Webmarket</span> 
                        <span class="tagline">قالب فروشگاهی HTML قدرتمند</span> 
                    </a>
                </div>
                
                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">
                        <div class="lang-currency">
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</span> <b class="caret"></b></a>
                                <!-- for all available country flags look the styles in lib/components/_flags.scss -->
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-si"></i> اسلوانیایی (SI)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-de"></i> آلمانی (DE)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-fr"></i> فرانسوی (FR)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-es"></i> اسپانیولی (ES)</a></li>
                                </ul>
                            </div>
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">USD ($)</span> <b class="caret"></b></a>
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#">USD ($)</a></li>
                                    <li><a href="#">EUR (€)</a></li>
                                    <li><a href="#">YEN (¥)</a></li>
                                    <li><a href="#">GBP (£)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            <a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a>
                        </div>
                        <div class="register">
                            <a href="#loginModal" role="button" data-toggle="modal">ورود</a> یا  
                            <a href="#registerModal" role="button" data-toggle="modal">ثبت نام</a>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>
    
    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="span9">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
                <!--  ==========  -->
                <!--  = Menu =  -->
                <!--  ==========  -->
                <div class="nav-collapse collapse">
                  <ul class="nav" id="mainNavigation">
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle"> خانه <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="index.html"><i class="icon-caret-left pull-right visible-desktop"></i> رنگ های پوسته</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">پوسته پیش فرض</a></li>
                                    <li><a href="index-grass-green.html">پوسته سبز چمنی</a></li>
                                    <li><a href="index-oil-green.html">پوسته سبز روغنی</a></li>
                                    <li><a href="index-gray.html">پوسته خاکستری</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index-boxed-solid.html"><i class="icon-caret-left pull-right visible-desktop"></i> ورژن boxed</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-boxed-solid.html">Boxed - با رنگ پس زمینه ثابت</a></li>
                                    <li><a href="index-boxed-pattern.html">Boxed - با پس زمینه الگو</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="shop.html" class="dropdown-toggle"> فروشگاه <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">قالب بندی پیش فرض</a></li>
                            <li><a href="shop-no-sidebar.html">تمام صفحه</a></li>
                            <li><a href="product.html">محصول تکی</a></li>
                            <li><a href="shop-search.html">نتایج جستجو</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="blog.html" class="dropdown-toggle">بلاگ <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">قالب بندی پیش فرض</a></li>
                            <li><a href="blog-single.html">تک نوشته</a></li>
                            <li><a href="blog-search.html">نتایج جستجو</a></li>
                            <li><a href="404.html">صفحه 404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="features.html" class="dropdown-toggle">امکانات <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="icons.html">آیکن ها</a></li>
                            <li class="dropdown">
                                <a href="features.html" class="dropdown-toggle"><i class="icon-caret-left pull-right visible-desktop"></i> همه امکانات</a>
                                <ul class="dropdown-menu">
                                    <li><a href="features.html#headings">سرخط ها</a></li>
                                    <li><a href="features.html#alertBoxes">جعبه های هشدار</a></li>
                                    <li><a href="features.html#tabs">تب ها</a></li>
                                    <li><a href="features.html#buttons">دکمه ها</a></li>
                                    <li><a href="features.html#toggles">تاگل ها</a></li>
                                    <li><a href="features.html#quotes">نقل قول ها</a></li>
                                    <li><a href="features.html#gallery">گرید های گالری</a></li>
                                    <li><a href="features.html#code">کد</a></li>
                                    <li><a href="features.html#columns">ستون ها</a></li>
                                    <li><a href="features.html#maps">نقشه ها</a></li>
                                    <li><a href="features.html#progress">نوار های پیشرفت</a></li>
                                    <li><a href="features.html#tables">جداول</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="active"><a href="about-us.html">درباره ما</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                  </ul>
                  
                  <!--  ==========  -->
                  <!--  = Search form =  -->
                  <!--  ==========  -->
                  <form class="navbar-form pull-right" action="#" method="get">
                      <button type="submit"><span class="icon-search"></span></button>
                      <input type="text" class="span1" name="search" id="navSearchInput">
                  </form>
                </div><!-- /.nav-collapse -->
            </div>
            
            <!--  ==========  -->
            <!--  = Cart =  -->
            <!--  ==========  -->
            <div class="span3">
                <div class="cart-container" id="cartContainer">
                    <div class="cart">
                        <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                        <p class="dark-clr hidden-tablet">$1816.90</p>
                        <a href="checkout-step-1.html" class="btn btn-danger">
                            <!-- <span class="icon icons-cart"></span> -->
                            <i class="icon-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="open-panel">
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="{{asset('webmarket/images/dummy/cart-items/cart-item-1.jpg')}}" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کلاه زمستانی</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$1998</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="{{asset('webmarket/images/dummy/cart-items/cart-item-2.jpg')}}" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کمربند اسپورت</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$3573</strong>
                            </div>
                        </div>
                         
                        <div class="item-in-cart clearfix">
                            <div class="image">
                                <img src="{{asset('webmarket/images/dummy/cart-items/cart-item-3.jpg')}}" width="124" height="124" alt="cart item" />
                            </div>
                            <div class="desc">
                                <strong><a href="product.html">کیف پول مردانه</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                            </div>
                            <div class="price">
                                <strong>$3695</strong>
                            </div>
                        </div>
                         
                        <div class="summary">
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">هزینه ارسال :</div>
                                    <div class="span6 align-right">$4.99</div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="row-fluid">
                                    <div class="span6">جمع کل :</div>
                                    <div class="span6 align-right size-16">$357.81</div>
                                </div>
                            </div>
                        </div>
                        <div class="proceed">
                            <a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                            <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                        </div>
                    </div>
                </div>
            </div> <!-- /cart -->
          </div>
        </div>
      </div>
    </div> <!-- /main menu -->
    
     
    
    
    
    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Webmarket</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="about-us.html">About Us</a>
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
                <aside class="span3">
                    <div class="sidebar-item">
                        
                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                        	<h3><span class="light">تیم</span> ما</h3>
                        </div>
                        
                        <!--  ==========  -->
                        <!--  = Menu (affix) =  -->
                        <!--  ==========  -->
                        <div class="row">
                        	<div class="span3" id="spyMenu">
		                    	<ul class="nav nav-pills nav-stacked">
		                    	    <li><a href="#jaka">جک اسمیت <i class="icon-caret-right pull-right"></i></a></li>
		                    	    <li><a href="#primoz">جان دیوید <i class="icon-caret-right pull-right"></i></a></li>
		                    	    <li><a href="#ana">آنا کارنینا <i class="icon-caret-right pull-right"></i></a></li>
		                    	    <li><a href="#andre">آندره ژید <i class="icon-caret-right pull-right"></i></a></li>
		                    	</ul>
                        	</div>
                        </div>
                        
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
                        <h3><span class="light">چند کلمه</span> درباره ما</h3>
                    </div> <!-- /title -->
                    
                    <!--  ==========  -->
                    <!--  = Description=  -->
                    <!--  ==========  -->
                    <section class="blocks-spacer">
                        <h5><span class="light">چطور</span> همه چیز شروع شد</h5>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.  </p>
                        
                        <h5><span class="light">چه</span> جریاناتی در پیش است</h5>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.  </p>
                        
                        <h5><span class="light">و</span> امروز ما که هستیم!</h5>
                        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.  </p>
                	</section>
                	
                    <!--  ==========  -->
                    <!--  = Team Members =  -->
                    <!--  ==========  -->
                    <section>
                        
                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span class="light">صورتهای</span> پشت وبمارکت</h3>
                        </div> <!-- /title -->
                        
                        <!--  = Jaka - designer =  -->
                        <div class="row-fluid push-down-20" id="jaka">
                            <div class="span4">
                                <a href="#"><img src="{{asset('webmarket/images/dummy/about-us/profile-1.jpg')}}" alt="person" width="550" height="660" /></a>
                            </div>
                            <div class="span4">
                                <h4><span class="light">جک</span> اسمیت</h4>
                                <h6 class="move-title-up">طراح ارشد</h6>
                                <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                            </div>
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-right icon-5x"></i>
                                    <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                                </blockquote>
                            </div>
                        </div>
                        
                        <!--  = Primož - programmer =  -->
                        <div class="row-fluid push-down-20" id="primoz">
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-right icon-5x"></i>
                                    <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                                </blockquote>
                            </div>
                            <div class="span4">
                                <h4><span class="light">حان</span> دیوید</h4>
                                <h6 class="move-title-up">Code Ninja</h6>
                                <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                            </div>
                            <div class="span4">
                                <a href="#"><img src="{{asset('webmarket/images/dummy/about-us/profile-2.jpg')}}" alt="person" width="550" height="660" /></a>
                            </div>
                        </div>
                        
                        <!--  = Ana =  -->
                        <div class="row-fluid push-down-20" id="ana">
                            <div class="span4">
                                <a href="#"><img src="{{asset('webmarket/images/dummy/about-us/profile-4.jpg')}}" alt="person" width="550" height="660" /></a>
                            </div>
                            <div class="span4">
                                <h4><span class="light">آنا</span> کارنینا</h4>
                                <h6 class="move-title-up">ارتباط با مشتری</h6>
                                <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                            </div>
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-right icon-5x"></i>
                                    <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                                </blockquote>
                            </div>
                        </div>
                        
                        <!--  = Andre =  -->
                        <div class="row-fluid push-down-20" id="andre">
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-right icon-5x"></i>
                                    <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                                </blockquote>
                            </div>
                            <div class="span4">
                                <h4><span class="light">آندره</span> ژید</h4>
                                <h6 class="move-title-up">ارتباط با مشتری</h6>
                                <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>
                            </div>
                            <div class="span4">
                                <a href="#"><img src="{{asset('webmarket/images/dummy/about-us/profile-3.jpg')}}" alt="person" width="550" height="660" /></a>
                            </div>
                        </div>
                        
                	</section>
                	
                	
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
    
    
    @section('scripts')
       
    @endsection
  </body>
</html>

    
    