@extends('layouts.DashboardMaster')
@section('content')
<div class="border border-1 shadow shadow-lg rounded p-4">
    <a href="/artikel/create" class="btn btn-success mb-4">Tambah Artikel</a>

    <div class="d-flex flex-wrap justify-content-evenly">

    @foreach ($artikels as $artikel)
      <div class="card mb-3" style="width: 18rem;">
        <img src="{{ asset('storage/' . $artikel->photo) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $artikel->title }}</h5>
          <p class="card-text">{!!  str_replace(['<div>', '</div>'], '', substr($artikel->body, 0, 200))  !!}...</p>
          <div class="text-center">
            <a href="/artikel/{{ $artikel->slug }}" class="btn btn-info">Lihat</a>
            <a href="/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning">Ubah</a>
            <form action="/artikel/{{ $artikel->slug }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger mt-1">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach

  </div>

  <div class="d-flex justify-content-center">
    {{ $artikels->links() }}
  </div>

</div>
    
@endsection