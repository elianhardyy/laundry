@extends('index')
@section('title','Beranda')
@section('beranda','active')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="{{asset('/img/hero/hero2.png')}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Tentang Kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{asset('/img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50"> 
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>Laundry</h2>
                            </div>
                            <p class="mb-20">
                            Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^
                            </p>
                            <p class="mb-30">Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>

                            <a href="about.php" class="btn">Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Proses Kami</span>
                            <h2>Pilihan Laundry Kami</h2>
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
                                <h5><a href="services.html">Baju + Jaket</a></h5>
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
                                <h5><a href="services.html">Spray</a></h5>
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
                                <h5><a href="services.html">Boneka</a></h5>
                                <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="{{asset('/img/gallery/section_bg01.png')}}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Hubungi kami untuk layanan</h2>
                                <p>Dijamin Rapi, Bersih, dan Wangi $_$</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="{{asset('/img/icon/call2.png')}}" alt="">Hubungi Kami</a>
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
                                    <p class="pera">Proses otomatis dimulai segera setelah pakaian Anda masuk ke dalam mesin ^_^ <br> Hasilnya adalah pakaian yang berkilau $_$<br> machine. The outcome is gleaming clothes!</p>
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
                    <div class="footer-tittle"
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