@extends('layouts.DashboardMaster')
@section('content')
    <div class="border border-1 shadow shadow-lg rounded p-4">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tour Guide</th>
                <th scope="col">Tour</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Hotel</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                    
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/home/tour_guide/{{ $jadwal->tour->user->id }}">{{ $jadwal->tour->user->name }}</a></td>
                        <td><a href="/tour/{{ $jadwal->tour->id }}">{{ $jadwal->tour->name }}</a></td>
                        <td>{{ $jadwal->date }}</td>
                        <td>{{ $jadwal->time }}</td>
                        <td>
                            <form action="/tour/{{ $jadwal->id }}/hotel" method="post" id="hotelForm">
                                @csrf
                                <select name="hotel_id" class="form-control" onchange="setHotel(this, {{ $jadwal->tour->hotel_id }})">
                                    <option value="">Tidak Perlu Hotel</option>
                                    @foreach ($jadwal->tour->hotel as $hotel)
                                        <option value="{{ $hotel->id }}" {{ ($hotel->id == $jadwal->hotel_id) ? 'selected' : '' }}>Nama: {{ $hotel->name }} - Harga: {{ $hotel->price }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $jadwals->links() }}
        </div>
    </div>

    <script>
        function setHotel(select, hotelID) {
            if(confirm('Pilih Hotel?')) {
                hotelForm.submit();
            }else {
                if(typeof hotelID !== undefined) {
                    select.value = "";
                }else {
                    select.value = hotelID;
                }
            }
        }
    </script>
@endsection