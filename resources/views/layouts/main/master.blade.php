<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Optical Care | @yield ('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/favicon.ico') }}' / >
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{--  CSS Style   --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/font-awesome.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/animate.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/revslider.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/jquery.mobile-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css') }}" media="all">

    {{-- Page defind css links --}}
    @yield ('csslink')

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
 
 {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
 
{{--  css for page loader  --}}
<style>
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(main/images/preloader/Preloader_8.gif) center no-repeat #fff;
    }
</style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head> 
<body class="cms-index-index cms-home-page">
<div class="se-pre-con"></div>

 <div id="page">
   @include('layouts.main.header')
   @include('layouts.main.navbar')
   
    
    @yield('content')
    

   @include('layouts.main.footer')
 </div>
  
  @include('layouts.main.mobile')
    <!-- JavaScript --> 
    <script type="text/javascript" src="{{ asset('main/js/jquery.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('main/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('main/js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('main/js/parallax.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('main/js/common.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('main/js/owl.carousel.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('main/js/jquery.mobile-menu.min.js') }}"></script> 
    @yield ('jslink')
    <script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</body>
</html>
