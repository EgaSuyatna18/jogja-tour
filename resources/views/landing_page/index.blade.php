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
			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-1.jpg" alt="Image" class="img-fluid">
					<div class="price">$430</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-2.jpg" alt="Image" class="img-fluid">
					<div class="price">$560</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-3.jpg" alt="Image" class="img-fluid">
					<div class="price">$490</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-4.jpg" alt="Image" class="img-fluid">
					<div class="price">$490</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>


			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-5.jpg" alt="Image" class="img-fluid">
					<div class="price">$430</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-6.jpg" alt="Image" class="img-fluid">
					<div class="price">$560</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-7.jpg" alt="Image" class="img-fluid">
					<div class="price">$490</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

			<div class="destination">
				<div class="thumb">
					<img src="/assets/landing_page/images/img-4.jpg" alt="Image" class="img-fluid">
					<div class="price">$490</div>
				</div>
				<div class="mt-4">
					<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
					<span class="meta">Maldives, Repbulic Maldives</span>
				</div>
			</div>

		</div>
	</div>

</div>


{{-- <div class="section bg-light">
	



	<h2 class="heading mb-5 text-center">Testimonials</h2>

	<div class="text-center mb-5">
		<div id="prevnext-testimonial">
			<span class="prev me-3" data-controls="prev">
				<span class="icon-chevron-left"></span>

			</span>
			<span class="next" data-controls="next">
				<span class="icon-chevron-right"></span>

			</span>
		</div>
	</div>

	<div class="wide-slider-testimonial-wrap">
		<div class="wide-slider-testimonial">
			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_1.jpg" alt="Free template by TemplateUX">
						<h3>John Doe</h3>
						<p class="position mb-5">CEO, Founder</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
				</blockquote>
			</div>

			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_2.jpg" alt="Free template by TemplateUX">
						<h3>James Woodland</h3>
						<p class="position mb-5">Designer at Facebook</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

				</blockquote>
			</div>

			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_3.jpg" alt="Free template by TemplateUX">
						<h3>Rob Smith</h3>
						<p class="position mb-5">Product Designer at Twitter</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
				</blockquote>
			</div>

			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_1.jpg" alt="Free template by TemplateUX">
						<h3>John Doe</h3>
						<p class="position mb-5">CEO, Founder</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
				</blockquote>
			</div>

			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_2.jpg" alt="Free template by TemplateUX">
						<h3>James Woodland</h3>
						<p class="position mb-5">Designer at Facebook</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

				</blockquote>
			</div>

			<div class="item">
				<blockquote class="block-testimonial">
					<div class="author">
						<img src="/assets/landing_page/images/person_3.jpg" alt="Free template by TemplateUX">
						<h3>Rob Smith</h3>
						<p class="position mb-5">Product Designer at Twitter</p>
					</div>
					<p>
						<div class="quote">&ldquo;</div>
					&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
				</blockquote>
			</div>
		</div>
	</div>



</div> <!-- /.untree_co-section --> --}}

<div class="section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-5 mb-4 mb-lg-0">
				<img src="/assets/landing_page/images/img_v_2.jpg" alt="Image" class="img-fluid">
			</div>
			<div class="col-lg-5 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

				<h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

				<div class="custom-accordion" id="accordion_1">
					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to download and register?</button>
						</h2>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
							</div>
						</div>
					</div> <!-- .accordion-item -->

					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
						</h2>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
							</div>
						</div>
					</div> <!-- .accordion-item -->
					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
						</h2>

						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
							</div>
						</div>

					</div> <!-- .accordion-item -->


					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We are better than others?</button>
						</h2>

						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
							</div>
						</div>

					</div> <!-- .accordion-item -->


					<div class="accordion-item">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We are better than others?</button>
						</h2>

						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
							<div class="accordion-body">
								When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
							</div>
						</div>

					</div> <!-- .accordion-item -->

				</div>
			</div>
		</div>
	</div>
</div>


{{-- <div class="section">
	<div class="container">

		<div class="row">
			<div class="col-12"data-aos="fade-up" data-aos-delay="0">
				
				<h2 class="heading mb-5">Recent Posts</h2>
			</div>
		</div>
		<div class="row align-items-stretch">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
				<div class="media-entry">
					<a href="#">
						<img src="/assets/landing_page/images/gal_1.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="bg-white m-body">
						<span class="date">May 14, 2020</span>
						<h3><a href="#">Far far away, behind the word mountains</a></h3>
						<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

						<a href="single.html" class="more d-flex align-items-center float-start">
							<span class="label">Read More</span>
							<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
				<div class="media-entry">
					<a href="#">
						<img src="/assets/landing_page/images/gal_2.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="bg-white m-body">
						<span class="date">May 14, 2020</span>
						<h3><a href="#">Far far away, behind the word mountains</a></h3>
						<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

						<a href="single.html" class="more d-flex align-items-center float-start">
							<span class="label">Read More</span>
							<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
				<div class="media-entry">
					<a href="#">
						<img src="/assets/landing_page/images/gal_3.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="bg-white m-body">
						<span class="date">May 14, 2020</span>
						<h3><a href="#">Far far away, behind the word mountains</a></h3>
						<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
						<a href="single.html" class="more d-flex align-items-center float-start">
							<span class="label">Read More</span>
							<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
				<div class="media-entry">
					<a href="#">
						<img src="/assets/landing_page/images/gal_4.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="bg-white m-body">
						<span class="date">May 14, 2020</span>
						<h3><a href="#">Far far away, behind the word mountains</a></h3>
						<p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
						<a href="single.html" class="more d-flex align-items-center float-start">
							<span class="label">Read More</span>
							<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
						</a>
					</div>
				</div>
			</div>
		</div>	
	</div>		
</div> --}}

@endsection