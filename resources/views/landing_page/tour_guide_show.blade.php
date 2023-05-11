@extends('layouts.LPMaster')
@section('content')
<div class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto">
                <div class="heading-content" data-aos="fade-up">
                    <h2 class="heading">Tour Guide Kami</h2>
                    <p>Tour guide akan memberikan penjelasan mengenai keunikan suatu destinasi dengan lebih jelas dan menyenangkan kepada wisatawan, sehingga kepuasan wisatawan selama perjalanan wisata juga semakin bertambah.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @php
                $words = explode(" ", $tourGuide->name);
                $letter = "";
                foreach ($words as $w) {
                $letter .= mb_substr($w, 0, 1);
                }
                $randomColor = 'rgb(' . rand(128, 255) . ', ' . rand(128, 255) . ', ' . rand(128, 255) . ')';
            @endphp 
                
            <div class="col-lg-3 mb-3 text-center">
                <a href="#" class="person">
                    <div class="mb-3">
                        <h1 style="color: {{ $randomColor }}">{{ strtoupper($letter) }}</h1>
                    </div>
                    <div>
                        <i class="fas fa-2x fa-star text-warning"></i>
                        <h3 class="d-inline">{{ round($tourGuide->rating->avg('rating'), 1) }}</h3>
                    </div>
                    <span class="subheading d-inline-block">sejak {{ date("Y-m-d",strtotime($tourGuide->created_at)) }}</span>
                    <h3 class="mb-3">{{ $tourGuide->name }}</h3>
                    <p class="text-muted">{{ $tourGuide->email }}</p>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="section">
	<div class="container">

		<div class="row">
			<div class="col-12"data-aos="fade-up" data-aos-delay="0">
				
				<h2 class="heading mb-5">Tour Tersedia</h2>
			</div>
		</div>
		<div class="row align-items-stretch">

            @foreach ($tours as $tour)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ asset('storage/' . $tour->photo) }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <h3><a href="#">{{ $tour->name }}</a></h3>
                            <p>{!!  str_replace(['<div>', '</div>'], '', substr($tour->description, 0, 200))  !!}...</p>

                            <a href="/tour/{{ $tour->id }}" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
			
		</div>	

        <div class="d-flex justify-content-center">
            {{ $tours->links() }}
        </div>

	</div>		
</div>
@endsection