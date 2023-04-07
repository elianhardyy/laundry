<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Beranda')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="index.php"><img src="{{asset('/img/logo/logo.png')}}" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('about')}}">Beranda</a></li>
                                    <li><a href="/blog">List Harga</a></li>
                                    <li><a href="/elements">Jadwal Pengambilan</a></li>
                                    <li><a href="/main">Pembayaran</a>
                                        <ul class="submenu">
                                            <li><a href="blog.php">cash</a></li>
                                            <li><a href="blog_details.php">shopee pay</a></li>
                                            <li><a href="elements.php">Gopay</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">kontak</a></li>
                                    @auth
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->username }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="/logout" method="POST" class="d-none">
                                                @csrf

                                            </form>
                                        </div>
                                    </li>
                                    <li><a href="/checkout">Checkout</a></li>
                                    @else
                                    <li><a href="/login">Login</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="{{asset('/img/icon/call.png')}}" alt=""> (+62) 87888795414</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    @yield('content')

    <div class="footer-bottom-area section-bg2" data-background="{{asset('img/gallery/footer-bg.png')}}">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Laundry</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->
    <!-- JS here -->

    <script src="{{asset('/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <script src="{{asset('/js/animated.headline.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{asset('/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('/js/contact.js')}}"></script>
    <script src="{{asset('/js/jquery.form.js')}}"></script>
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/js/mail-script.js')}}"></script>
    <script src="{{asset('/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('/js/plugins.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>