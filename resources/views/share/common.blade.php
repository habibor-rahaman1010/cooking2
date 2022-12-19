{{-- This is my common tamplate section  --}}

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{asset('assets/css/skills/progressbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/skills/style.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/navmenu/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/portfolio.jquery.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}}">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('assets/css/teamslide.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

        <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    </head>


  <body data-spy="scroll" data-target=".navbar-collapse">
    @include('share.navbar')
    
   <div class="main-contant">
      <section>
        @yield('content')
      </section> 
   </div>
    
  
    @include('share.footer')
    
     <!-- START SCROLL TO TOP  -->

     <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>

    <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/js/portfolio.jquery.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/css/skills/inview.min.js')}}"></script>
    <script src="{{asset('assets/css/skills/progressbar.js')}}"></script>
    <script src="{{asset('assets/css/skills/main.js')}}"></script>

    <!--This is link only for gmaps-->
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{asset('assets/js/gmaps.min.js')}}"></script>
    <script>
        var map = new GMaps({
            el: '.ourmaps',
            scrollwheel: false,
            lat: -12.043333,
            lng: -77.028333
        });
    </script>

    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
   
  </body>
</html>