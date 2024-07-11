<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Aticoexport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Custom Admin Theme Design" />
<meta name="csrf-token" content="{!! csrf_token() !!}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
 <link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


<!-- font CSS -->
 <link media="all" type="text/css" rel="stylesheet"  href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic">
<link media="all" type="text/css" rel="stylesheet" href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">


<!-- //font-awesome icons -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>


@yield('css')
    <script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }            

        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        }); 
    });
    </script>
<!-- charts -->
<script src="{{ asset('assets/js/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/morris.js') }}"></script>
<!-- <script src="{{ asset('assets/js/morris.js') }}/assets/js/morris.js"></script> -->

<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/morris.css') }}">
<link media="all" type="text/css" rel="stylesheet" href="{{ asset('assets/css/template.css') }}">


<!-- //charts -->
<!--skycons-icons-->
<script src="{{ asset('assets/js/skycons.js') }}"></script>



<!--//skycons-icons-->
</head>
<body class="dashboard-page">
    @include('admin.layouts.sidebar')    
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            </a>
        </nav>
        @include('admin.layouts.header')
        <div class="main-grid">
            @yield('content')
        </div>
        @include('admin.layouts.footer')       
    </section>
</body>
</html>
