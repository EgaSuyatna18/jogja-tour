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
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/home/tour_guide/{{ $order->tour->user->id }}">{{ $order->tour->user->name }}</a></td>
                        <td><a href="/tour/{{ $order->tour->id }}">{{ $order->tour->name }}</a></td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->time }}</td>
                        <td>
                            <form action="/pesan/{{ $order->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Batalkan</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
@endsection