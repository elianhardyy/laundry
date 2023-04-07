@extends('section')
@section('title','Beranda')
@section('beranda','active')

@section('content')
<!-- ? Preloader Start -->

    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Layanan laundry berkualitas di kota Malang</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Kami menjaga kebersihan kain Anda</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Layanan kami</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Proses Kami</span>
                            <h2>Beginilah cara kerja kami</h2>
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
                                <h5><a href="services.html">Kami Mengumpulkan Pakaian Anda</a></h5>
                                <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{asset('/img/icon/services-icon2.svg')}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Kami Mencuci Pakaian Anda</a></h5>
                                <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{asset('/img/icon/services-icon3.svg')}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Pengemasan Pakaian Anda</a></h5>
                                <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>
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
                            <span class="element">Jasa Kami</span>
                            <h2>Layanan Yang Kami Tawarkan</h2>
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
                                    <h5><a href="services.html">Pencucian Pakaian</a></h5>
                                    <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya pakaian berkilau ^_^</p>
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
                                    <h5><a href="services.html">Setrika Pakaian</a></h5>
                                    <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya pakaian berkilau ^_^</p>
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
                                <h2>Hubungi Laundry Kami</h2>
                                <p>Dijamin Rapi, Bersih, dan Wangi $_$</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="{{asset('/img/icon/call2.png')}}" alt="">Hubungi Kita</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!-- Testimonials_start -->
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
                                    <p class="pera">Proses otomatis dimulai segera setelah pakaian Anda masuk ke dalam mesin ^_^ <br> Hasilnya adalah pakaian yang berkilau $_$</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Ulasan Dan Saran</p>
                                </div>
                            
                        <!-- social -->
    
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                            <li><a href="#">laundry@567.com</a></li>
                            <li><a href="#">789/A, Green road NYC-9089</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection