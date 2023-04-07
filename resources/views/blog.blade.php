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
                            <h2>List Harga</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Blog Area Start-->
    <div class="card-group">
        <div class="card">
            <img src="{{asset('/img/gallery/foto1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Baju + Jaket</h5>
                <p class="card-text">3 kg </p>
                <p class="card-text"><small class="text-muted">15 ribu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('/img/gallery/foto2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Spray</h5>
                <p class="card-text">1 biji</p>
                <p class="card-text"><small class="text-muted">10 ribu</small></p>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('/img/gallery/foto3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Boneka</h5>
                <p class="card-text">1 biji</p>
                <p class="card-text"><small class="text-muted">5 ribu</small></p>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <div>
        <a type="button" class="btn btn-primary" href="/order-laundry">Order</a>
    </div>
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
                                    <p>Proses otomatis dimulai segera setelah pakaian Anda masuk ke mesin. Hasilnya adalah pakaian yang berkilau ^_^</p>
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
                            <h4>Pilihan Laundry Kami</h4>
                            <ul>
                                <li><a href="#">- Baju + Jaket</a></li>
                                <li><a href="#">- Spray</a></li>
                                <li><a href="#">- Boneka</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li class="number"><a href="#">(+62) 87888795414</a></li>
                                <li><a href="#">Laundry@gmail.com</a></li>
                                <li><a href="#">Kota Malang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection