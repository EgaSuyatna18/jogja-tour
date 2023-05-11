@extends('layouts.LPMaster')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content pe-5">
                <h1>{{ $artikel->title }}</h1>
                <img src="{{ asset('storage/' . $artikel->photo) }}" alt="image" class="img-fluid my-4"><br>
                {!! $artikel->body !!}

            </div>
            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <h3 class="text-black">Data Author</h3>
                    <h1 class="btn btn-warning">{{ $artikel->user->role }}</h1>
                    <div class="my-2">
                        <i class="fas fa-2x fa-star text-warning"></i>
                        <h3 class="d-inline">{{ round($artikel->user->rating->avg('rating'), 1) }}</h3>
                    </div>
                    <P>Nama : {{ $artikel->user->name }}</P>
                    <P>Email : {{ $artikel->user->email }}</P>
                    @if ($artikel->user->role == 'tour-guide')
                        <a href="/home/tour_guide/{{ $artikel->user->id }}" class="btn btn-warning mb-3">Lihat Tour Guide</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection