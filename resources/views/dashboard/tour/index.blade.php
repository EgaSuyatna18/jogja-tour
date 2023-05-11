@extends('layouts.DashboardMaster')
@section('content')
<div class="border border-1 shadow shadow-lg rounded p-4">
    <a href="/tour/create" class="btn btn-success mb-4">Tambah Tour</a>

    <div class="d-flex flex-wrap justify-content-evenly">

    @foreach ($tours as $tour)
      <div class="card mb-3" style="width: 18rem;">
        <img src="{{ asset('storage/' . $tour->photo) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $tour->name }}</h5>
          <p class="card-text">{!!  str_replace(['<div>', '</div>'], '', substr($tour->description, 0, 200))  !!}...</p>
          <div class="text-center">
            <a href="/tour/{{ $tour->id }}" class="btn btn-info">Lihat</a>
            <a href="/tour/{{ $tour->id }}/edit" class="btn btn-warning">Ubah</a>
            <form action="/tour/{{ $tour->id }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger my-1">Hapus</button>
            </form>
            <a href="/hotel/{{ $tour->id }}" class="btn btn-warning">Managemen Hotel</a>
          </div>
        </div>
      </div>
    @endforeach

  </div>

  <div class="d-flex justify-content-center">
    {{ $tours->links() }}
  </div>

</div>
    
@endsection