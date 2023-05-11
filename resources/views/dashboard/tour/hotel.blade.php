@extends('layouts.DashboardMaster')
@section('content')
<div class="border border-1 shadow shadow-lg rounded p-4">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#tambahModal">
    Tambah Hotel
</button>
  
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Hotel</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->price }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahModal"
                            onclick="setData('{{ $hotel->id }}', '{{ $hotel->name }}', '{{ $hotel->price }}')">
                            Ubah
                        </button>
                        <form action="/hotel/{{ $tour_id }}/{{ $hotel->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>

        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Hotel</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/hotel/{{ $tour_id }}" method="post" id="tambahForm">
            @csrf
            <div class="mb-3">
                <label>Nama Hotel</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="price" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" form="tambahForm">Submit</button>
        </div>
      </div>
    </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="ubahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ubahModalLabel">Ubah Hotel</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" id="ubahForm">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Nama Hotel</label>
                <input type="text" name="name" class="form-control" id="ubahName">
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="price" class="form-control" id="ubahPrice">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" form="ubahForm">Submit</button>
        </div>
      </div>
    </div>
</div>

<script>
    function setData(id, name, price) {
        ubahForm.action = '/hotel/' + {{ $tour_id }} + '/' + id;
        ubahName.value = name;
        ubahPrice.value = price;

    }
</script>
@endsection