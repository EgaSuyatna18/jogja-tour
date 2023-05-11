@extends('layouts.LPMaster')
@section('content')
    
<div class="section">
	<div class="container">

		<div class="row">
			<div class="col-12"data-aos="fade-up" data-aos-delay="0">
				
				<h2 class="heading mb-5">Artikel Terbaru</h2>
			</div>
		</div>
		<div class="row align-items-stretch">

            @foreach ($artikels as $artikel)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="#">
                            <img src="{{ asset('storage/' . $artikel->photo) }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <h3><a href="#">{{ $artikel->title }}</a></h3>
                            <p>{!!  str_replace(['<div>', '</div>'], '', substr($artikel->body, 0, 200))  !!}...</p>

                            <a href="/artikel/{{ $artikel->slug }}" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
			
		</div>	

        <div class="d-flex justify-content-center">
            {{ $artikels->links() }}
        </div>

	</div>		
</div>

@endsection