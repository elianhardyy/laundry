<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundryl | Teamplate</title>
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
    <!-- ? Preloader Start -->
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
                        <a href="index.html"><img src="{{asset('/img/logo/logo.png')}}" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li  class="active"><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="{{asset('/img/icon/call.png')}}" alt=""> (08) 728 256 266</a>
                    <a href="#" class="header-btn2">Make an Appointment</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="{{asset('/img/hero/hero2.png')}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Process</span>
                            <h2>This is how we work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{asset('/img/icon/services-icon1.svg')}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">We collect your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{asset('/img/icon/services-icon2.svg')}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Wash your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{asset('/img/icon/services-icon3.svg')}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Get delivery</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Services</span>
                            <h2>Services we offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{asset('/img/gallery/offers1.png')}}" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{asset('/img/gallery/offers2.png')}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="{{asset('/img/icon/offers-icon1.png')}}" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Cloth laundry</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{asset('/img/gallery/offers2.png')}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="{{asset('/img/icon/offers-icon1.png')}}" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Cloth ironing</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{asset('/img/gallery/offers4.png')}}" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="{{asset('/img/gallery/section_bg01.png')}}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="{{asset('/img/icon/call2.png')}}" alt=""> Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!--? Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                                <div class="testmonial-thumb">
                                    <img src="{{asset('/img/gallery/testimonila1.png')}}" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="{{asset('/img/gallery/testimonila2.png')}}" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="{{asset('/img/gallery/testimonila3.png')}}" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="{{asset('/img/gallery/testimonila2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="testmonial-item-active text-center">
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->

        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="{{asset('/img/gallery/Map.png)}}" alt="" class="w-100">
        </div>
        <!-- Map Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo mb-35">
                            <a href="index.html"><img src="{{asset('/img/logo/logo2_footer.png')}}" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                            </div>
                        </div>
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Services </h4>
                        <ul>
                            <li><a href="#">- Dry Cleaning</a></li>
                            <li><a href="#">- Dry Clean</a></li>
                            <li><a href="#">- Ironing Services</a></li>
                            <li><a href="#">- Laundry Service London</a></li>
                            <li><a href="#">- Laundry App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Get in touch</h4>
                        <ul>
                            <li class="number"><a href="#">(90) 898 789-8957</a></li>
                            <li><a href="#">laundry@567.com</a></li>
                            <li><a href="#">789/A, Green road NYC-9089</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area section-bg2" data-background="">
    <div class="container">
        <div class="footer-border">
           <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a href="#"  title="Go to Top"> <i class="fas fa-level-up-alt"></i></a>
</div>

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