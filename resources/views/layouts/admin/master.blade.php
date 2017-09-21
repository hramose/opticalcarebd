<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/favicon.ico') }}' / >  --}}
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon-32x32.png') }}" sizes="32x32">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>@yield ('title')|Optical Care</title>

    {{--  CSS Style   --}}

      <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/uikit/css/uikit.almost-flat.min.css') }}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{ asset('admin/assets/icons/flags/flags.min.css') }}" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style_switcher.min.css') }}" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/themes/themes_combined.min.css') }}" media="all">

    {{-- Page defind css links --}}
    @yield ('csslink')

   
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
        background: url({{URL::asset('admin/assets/img/preloader/Preloader_8.gif') }}) center no-repeat #fff;
        
    }
</style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head> 
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
<div class="se-pre-con"></div>

@include('layouts.admin.header')

@include('layouts.admin.sidebar')

   @yield('content')

@include('layouts.admin.footer')

    <!-- JavaScript --> 
  <!-- google web fonts -->
<script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
</script>



<!-- common functions -->
<script src="{{ asset('admin/assets/js/common.min.js') }}"></script>
<!-- uikit functions -->
<script src="{{ asset('admin/assets/js/uikit_custom.min.js') }}"></script>
<!-- altair common functions/helpers -->
<script src="{{ asset('admin/assets/js/altair_admin_common.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('main/js/modernizr.js') }}"></script>

<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
@yield ('jslink')


 @include('layouts.admin.settings')
</body>
</html>
