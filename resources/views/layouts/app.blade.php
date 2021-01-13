<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Cafe</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/dashboard/css/app.css')}}"/>
    <link href="{{asset('assets/dashboard/vendors/toastr/css/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/dashboard/vendors/weathericon/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/dashboard/vendors/c3/c3.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/dashboard/vendors/nvd3/css/nv.d3.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/custom.css')}}">
    <link href="{{asset('assets/dashboard/css/dashboard2.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/select2/css/select2-bootstrap.css')}}">
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/dashboard/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
    @include('layouts.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
                @include('layouts.sidebar')
    </aside>

    <aside class="right-side">
        @yield('content')
    </aside>
</div>
    <script src="{{asset('assets/dashboard/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/dashboard/js/jquery.flot.spline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/c3/c3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/nvd3/js/nv.d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/advanced_newsTicker/js/jquery.newsTicker.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/dashboard2.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/dashboard/vendors/select2/js/select2.full.js')}}"></script>
</body>
</html>
