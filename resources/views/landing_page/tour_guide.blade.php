@extends('layouts.LPMaster')
@section('content')
<div class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center">
                <div class="heading-content" data-aos="fade-up">
                    <h2 class="heading">Tour Guide Kami</h2>
                    <p>Tour guide akan memberikan penjelasan mengenai keunikan suatu destinasi dengan lebih jelas dan menyenangkan kepada wisatawan, sehingga kepuasan wisatawan selama perjalanan wisata juga semakin bertambah.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($tourGuides as $tourGuide)
            @php
                $words = explode(" ", $tourGuide->name);
                $letter = "";
                foreach ($words as $w) {
                $letter .= mb_substr($w, 0, 1);
                }
                $randomColor = 'rgb(' . rand(128, 255) . ', ' . rand(128, 255) . ', ' . rand(128, 255) . ')';
            @endphp 
                
            <div class="col-lg-3 mb-3 text-center">
                <a href="/home/tour_guide/{{ $tourGuide->id }}" class="person">
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
                    <p class="btn btn-warning">Lihat Tour</p>
                </a>
            </div>

            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $tourGuides->links() }}
        </div>

    </div>
</div>
@endsection