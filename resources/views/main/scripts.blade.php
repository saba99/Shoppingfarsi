
@section('title')
    
@endsection 

@yield('scripts')

<!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
    
    <!--  = _ =  -->
    <script src="{{asset('webmarket/js/underscore/underscore-min.js')}}" type="text/javascript"></script>
    
    <!--  = Bootstrap =  -->
    <script src="{{asset('webmarket/js/bootstrap.min.js')}}" type="text/javascript"></script>
    
    <!--  = Slider Revolution =  -->
    <script src="{{asset('webmarket/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('webmarket/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
    
    <!--  = CarouFredSel =  -->
    <script src="{{asset('webmarket/js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>
    
    <!--  = jQuery UI =  -->
    <script src="{{asset('webmarket/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('webmarket/js/jquery-ui-1.10.3/touch-fix.min.js')}}" type="text/javascript"></script>
    
    <!--  = Isotope =  -->
    <script src="{{asset('webmarketjs/isotope/jquery.isotope.min.js')}}" type="text/javascript"></script>
    
    <!--  = Tour =  -->
    <script src="{{asset('webmarket/js/bootstrap-tour/build/js/bootstrap-tour.min.js')}}" type="text/javascript"></script>
    
    <!--  = PrettyPhoto =  -->
    <script src="{{asset('webmarket/js/prettyphoto/js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
    
    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{asset('webmarket/js/goMap/js/jquery.gomap-1.3.2.min.js')}}"></script>
    
    <!--  = Custom JS =  -->
    <script src="{{asset('webmarket/js/custom.js')}}" type="text/javascript"></script>

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
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
    
    <!--  = _ =  -->

    
    