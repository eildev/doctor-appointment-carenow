
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carenow – Medical & Dentist HTML Tempate</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/color/color-1.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css">
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/jquery.min.js"></script>
    <!--owl.carousel-->
    <link rel="stylesheet" href="{{asset('frontend')}}/owlcarousel/assets/owl.theme.default.min.css">
    <!--animation-->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/animation/animate.css">
    <!--logo-->
    <link rel="icon" href="{{asset('frontend')}}/assets/image/Facvicon.png" sizes="32x32" />
</head>
<body class="counter-scroll header_sticky">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div id="page">
            <!-- //header -->
                @include('frontend.body.header')
            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                   @yield('body')
                    <!--site-content-->
                </div>
                <!--#content-wrap-->
            </div>
            <!--#main-content-->

            <!-- //Footer -->
            @include('frontend.body.footer')
            <div class="button-go-top">
                <a href="#" title="" class="go-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>

        </div><!--#page-->
    </div> <!--#wrapper-->
    <!-- Javascript -->
    
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/jquery-validate.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <!-- <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/slider_v1.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/slider_v2.js"></script> -->
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!--animation-->
    <script src="{{asset('frontend')}}/assets/animation/wow.min.js"></script>
    <script src="{{asset('frontend')}}/javascript/animation.js"></script>
    <!--owl.carousel-->
    <script src="{{asset('frontend')}}/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/owlcarousel/carousel.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/javascript/main.js"></script>
    

</body>

</html>