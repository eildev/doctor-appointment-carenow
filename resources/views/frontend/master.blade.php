<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Mecare – Hospital and Health HTML Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/img/favicon.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Place favicon.ico in the root Internist, General Practitonery -->

		<!-- CSS here -->
        <script src="{{asset('frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/dripicons.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/default.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/meanmenu.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    </head>
    <body>
        <!-- header -->
       @include('frontend.body.header')
        <!-- header-end -->
        <!-- main-area -->
        <main>

           @yield('body')

        </main>
        <!-- main-area-end -->
        <!-- footer -->

        <!-- footer-end -->
        @include('frontend.body.footer')

		<!-- JS here -->
        	<!-- JS here -->
        <script src="{{asset('frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('frontend')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/js/one-page-nav-min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.meanmenu.min.js"></script>
        <script src="{{asset('frontend')}}/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/js/ajax-form.js"></script>
        <script src="{{asset('frontend')}}/js/paroller.js"></script>
        <script src="{{asset('frontend')}}/js/wow.min.js"></script>
        <script src="{{asset('frontend')}}/js/js_isotope.pkgd.min.js"></script>
        <script src="{{asset('frontend')}}/js/imagesloaded.min.js"></script>
        <script src="{{asset('frontend')}}/js/parallax.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.scrollUp.min.js"></script>
        <script src="{{asset('frontend')}}/js/parallax-scroll.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/js/element-in-view.js"></script>
        <script src="{{asset('frontend')}}/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            toastr.options =
            {
              "closeButton" : true,
              "progressBar" : true
            }
                  toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
              "closeButton" : true,
              "progressBar" : true
            }
            @endif

          </script>
    </body>
</html>
