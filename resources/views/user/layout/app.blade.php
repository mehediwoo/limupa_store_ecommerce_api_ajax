<!doctype html>
<html class="no-js" lang="eng">
<!-- index-231:32-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/images/favicon.png') }}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset('user/css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{ asset('user/css/fontawesome-stars.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/meanmenu.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/slick.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/venobox.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/nice-select.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/helper.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <!-- Modernizr js -->
    <script src="{{ asset('user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    @yield('css')
</head>
<body>
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
                @include('user.layout.top_header')
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
                @include('user.layout.middle_header')
            <!-- Header Middle Area End Here -->

            <!-- Begin Header Bottom Area -->
                @include('user.layout.bottom_header')
            <!-- Header Bottom Area End Here -->

            <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Mobile Menu Area End Here -->
        </header>
        <!-- Header Area End Here -->

        <!-- Main Content -->
        @yield('content')

        <!-- Begin Footer Area -->
        @include('user.layout.footer')
        <!-- Footer Area End Here -->

        <!-- Begin Quick View | Modal Area -->
        @include('user.quick_view')
        <!-- Quick View | Modal Area End Here -->

        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{ asset('user/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('user/js/vendor/popper.min.js') }}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
        <!-- Ajax Mail js -->
        <script src="{{ asset('user/js/ajax-mail.js') }}"></script>
        <!-- Meanmenu js -->
        <script src="{{ asset('user/js/jquery.meanmenu.min.js') }}"></script>
        <!-- Wow.min js -->
        <script src="{{ asset('user/js/wow.min.js') }}"></script>
        <!-- Slick Carousel js -->
        <script src="{{ asset('user/js/slick.min.js') }}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific popup js -->
        <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Isotope js -->
        <script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('user/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Mixitup js -->
        <script src="{{ asset('user/js/jquery.mixitup.min.js') }}"></script>
        <!-- Countdown -->
        <script src="{{ asset('user/js/jquery.countdown.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ asset('user/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('user/js/waypoints.min.js') }}"></script>
        <!-- Barrating -->
        <script src="{{ asset('user/js/jquery.barrating.min.js') }}"></script>
        <!-- Jquery-ui -->
        <script src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
        <!-- Venobox -->
        <script src="{{ asset('user/js/venobox.min.js') }}"></script>
        <!-- Nice Select js -->
        <script src="{{ asset('user/js/jquery.nice-select.min.js') }}"></script>
        <!-- ScrollUp js -->
        <script src="{{ asset('user/js/scrollUp.min.js') }}"></script>
        <!-- Main/Activator js -->
        <script src="{{ asset('user/js/main.js') }}"></script>
        @yield('script')
        <script>
            $(document).on('ready',function(){

                // load cart
                function loadCart(){
                    $.ajax({
                        url:"{{ route('loadCart') }}",
                        success:function(data){
                            $('#cart_iteams').html(data);
                        }
                    });
                }
                loadCart();

                // add to cart
                $(document).on('click','#addToCart', function(){
                    event.preventDefault();
                    let product_id = $(this).attr('pro_id');
                    $.ajax({
                        url:"{{ route('AddToCart') }}",
                        data:{product_id:product_id},
                        success:function(data){
                            loadCart();
                        }
                    });
                });
            });
        </script>
    </body>

<!-- index-231:38-->
</html>
