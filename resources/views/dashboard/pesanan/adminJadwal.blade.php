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
                <th scope="col">Action</th>
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
                            <a href="/admin/pesan/{{ $jadwal->id }}/selesai" class="btn btn-success">Selesai</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $jadwals->links() }}
        </div>
    </div>
@endsection