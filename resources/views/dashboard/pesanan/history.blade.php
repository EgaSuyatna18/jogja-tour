@extends('layouts.DashboardMaster')
@section('content')
{{-- {{ dd($jadwals) }} --}}
<style>
.rating {
    direction: rtl;
    unicode-bidi: bidi-override;
    color: #ddd; /* Personal choice */
}
.rating input {
	display: none;
}
.rating label:hover,
.rating label:hover ~ label,
.rating input:checked + label,
.rating input:checked + label ~ label {
	color: #ffc107; /* Personal color choice. Lifted from Bootstrap 4 */
}
</style>
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
                            @if ($jadwal->rating->count())
                                <div class="rating" style="width: 20rem" id="rating">
                                    <input id="rating-5" type="radio" disabled @if($jadwal->rating->rating == 5) checked @endif/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-4" type="radio" disabled @if($jadwal->rating->rating == 4) checked @endif/><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-3" type="radio" disabled @if($jadwal->rating->rating == 3) checked @endif/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-2" type="radio" disabled @if($jadwal->rating->rating == 2) checked @endif/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-1" type="radio" disabled @if($jadwal->rating->rating == 1) checked @endif/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                                </div>
                            @else    
                            <form action="/riwayat/{{ $jadwal->id }}/{{ $jadwal->tour->user->id }}/rating" method="post" id="ratingForm">
                                @csrf
                                <div class="rating" style="width: 20rem" id="rating">
                                    <input id="rating-5" type="radio" name="rating" value="5" onchange="rate()"/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-4" type="radio" name="rating" value="4" onchange="rate()"/><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-3" type="radio" name="rating" value="3" onchange="rate()"/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-2" type="radio" name="rating" value="2" onchange="rate()"/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-1" type="radio" name="rating" value="1" onchange="rate()"/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                                </div>
                            </form>
                            @endif
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
   function rate() {
    if(confirm('Beri Rating?')) {
        ratingForm.submit();
    }
   }
</script>
@endsection