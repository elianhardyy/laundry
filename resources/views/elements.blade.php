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
								<h2>Jadwal Pengambilan</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero End -->
		<!--? Start Button -->
		<section class="button-area">
			<div class="container box_1170 border-top-generic">
				<h3 class="text-heading">Jadwal Pengambilan</h3>

				<div class="button-group-area">
					<a href="#" class="genric-btn default">Selasa</a>
					<a href="#" class="genric-btn primary">Jam 10.00</a>
					<a href="#" class="genric-btn info">Jam 11.00</a>
					<a href="#" class="genric-btn success">Jam 14.00</a>
					<a href="#" class="genric-btn danger">Jam 17.00</a>

				</div>

				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default radius">Rabu</a>
					<a href="#" class="genric-btn primary radius">Jam 10.00 </a>
					<a href="#" class="genric-btn success radius">Jam 11.00</a>
					<a href="#" class="genric-btn info radius">Jam 14.00</a>
					<a href="#" class="genric-btn danger radius">Jam 17.00</a>
				</div>

				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default circle">Kamis</a>
					<a href="#" class="genric-btn primary circle">Jam 10.00</a>
					<a href="#" class="genric-btn success circle">Jam 11.00</a>
					<a href="#" class="genric-btn info circle">Jam 14.00</a>
					<a href="#" class="genric-btn danger circle">Jam 17.00</a>
				</div>

				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default circle arrow">Sabtu<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn primary circle arrow">Jam 10.00<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn success circle arrow">Jam 11.00<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn info circle arrow">Jam 14.00<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn danger circle arrow">Jam 17.00<span class="lnr lnr-arrow-right"></span></a>

								<!-- End Button -->
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
							@endsection