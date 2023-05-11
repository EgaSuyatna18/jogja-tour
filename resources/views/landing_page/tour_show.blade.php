@extends('layouts.LPMaster')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content pe-5">
                <h1>{{ $tour->name }}</h1>
                <img src="{{ asset('storage/' . $tour->photo) }}" alt="image" class="img-fluid my-4"><br>
                {!! $tour->description !!}

            </div>
            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <h3 class="text-black">Data Author</h3>
                    <h1 class="btn btn-warning">{{ $tour->user->role }}</h1>
                    <div class="my-2">
                      <i class="fas fa-2x fa-star text-warning"></i>
                      <h3 class="d-inline">{{ round($tour->user->rating->avg('rating'), 1) }}</h3>
                    </div>
                    <P>Nama : {{ $tour->user->name }}</P>
                    <P>Email : {{ $tour->user->email }}</P>
                    <a href="/home/tour_guide/{{ $tour->user->id }}" class="btn btn-warning mb-3">Lihat Tour Guide</a><br>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pesanTour">
                        Pesan Tour
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pesanTour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pesanTourLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="pesanTourLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/tour/{{ $tour->id }}/order" method="post" id="pesanTourForm">
            @csrf
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="mb-3">
                <label>Jam</label>
                <input type="time" name="time" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" form="pesanTourForm">Submit</button>
        </div>
      </div>
    </div>
  </div>
@endsection