@extends('layouts.LPMaster')
@section('content')
<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
	<div class="container">
		<div class="row align-items-center justify-content-between  mb-5">
			<div class="col-lg-5" data-aos="fade-up">
				<h2 class="heading mb-3">Jelajahi Banyak Wisata Di Seluruh Jogja</h2>
				<p>Jogja, kota yang memiliki daya tarik yang begitu kuat. Keindahan alamnya, kearifan lokalnya, dan keramahan penduduknya mampu menyentuh hati setiap orang yang mengunjunginya. Setiap sudut kota menyimpan kisah-kisah inspiratif yang mengajarkan kita tentang arti kebersamaan, keikhlasan, dan cinta tanah air. Jogja bukan sekadar destinasi wisata, tapi juga tempat di mana hati kita dapat merasakan kedamaian dan kebahagiaan yang tiada tara.</p>
			</div>		
			<div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
				<div id="destination-controls">
					<span class="prev me-3" data-controls="prev">
						<span class="icon-chevron-left"></span>

					</span>
					<span class="next" data-controls="next">
						<span class="icon-chevron-right"></span>

					</span>
				</div>
			</div>
		</div>	

	</div>		

	<div class="destination-slider-wrap">
		<div class="destination-slider">
			@foreach ($tours as $tour)
				
			<div class="destination">
				<div class="thumb">
					<img src="{{ asset('storage/' . $tour->photo) }}" alt="Image" class="img-fluid">
					<div class="price">{{ $tour->user->name }}</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">{{ $tour->name }}</a></h3>
					<span class="meta">{!!  str_replace(['<div>', '</div>'], '', substr($tour->description, 0, 200))  !!}...</span>
				</div>
				<a href="/tour/{{ $tour->id }}" class="btn btn-warning">Lihat</a>
			</div>

			@endforeach
		</div>
	</div>

</div>


<div class="section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-5 mb-4 mb-lg-0">
				<img src="/assets/landing_page/images/img_v_2.jpg" alt="Image" class="img-fluid">
			</div>
			<div class="col-lg-5 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

				<h2 class="heading mb-5">Cara Memesan Tour?</h2>

				<div class="custom-accordion" id="accordion_1">
					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. Daftar Sebagai Tourist</button>
						</h2>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								Daftar sebagai tourist dengan mengunjungi halaman register lalu masukan data diri anda.
							</div>
						</div>
					</div> <!-- .accordion-item -->

					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. Pilih Tour Guide Anda</button>
						</h2>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								Tour Guide memiliki rating yang di nilai oleh Tourist yang telah menggunakan jasa Tour Guide.
							</div>
						</div>
					</div> <!-- .accordion-item -->
					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3. Pesan Tour</button>
						</h2>

						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								Anda dapat memesan tour yang disediakan oleh Tour Guide dan juga dapat memesan hotal yang direkomendasikan oleh Tour Guide
							</div>
						</div>

					</div> <!-- .accordion-item -->


					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4. Beri Rating Tour Guide</button>
						</h2>

						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								Anda dapat memberikan penilaian atas pelayanan yang di berikan Tour Guide. Penilaian anda mungkin akan berguna untuk Tourist Lain
							</div>
						</div>

					</div> <!-- .accordion-item -->

					</div> <!-- .accordion-item -->

				</div>
			</div>
		</div>
	</div>
</div>

@endsection