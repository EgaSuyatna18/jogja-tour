<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\TourOrder;
use App\Models\Rating;
use Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tour.index', [
            'title' => 'Tour',
            'tours' => Tour::where('user_id', auth()->user()->id)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tour.create', ['title' => 'Tambah Tour']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:max_width=1920,max_height=1440',
            'name' => 'required',
            'description' => 'required'
        ]);

        $validated['photo'] = $request->file('photo')->store('tour-photo');
        $validated['user_id'] = auth()->user()->id;

        Tour::create($validated);

        return redirect('/tour')->with('notify', 'Berhasil Menambah Tour.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        $tour->with('user.rating');
        return view('landing_page.tour_show', [
            'title' => $tour->title,
            'tour' => $tour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $tour->with('user');
        return view('dashboard.tour.edit', [
            'title' => 'Tambah Tour',
            'tour' => $tour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];

        if($request->file('photo')) {
            $rules['photo'] = 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:max_width=1920,max_height=1440';
        }

        $validated = $request->validate($rules);

        if($request->file('photo')) {
            Storage::delete($tour->photo);
            $validated['photo'] = $request->file('photo')->store('tour-photo');
        }

        $tour->update($validated);

        return redirect('/tour')->with('notify', 'Berhasil Mengubah Tour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        Storage::delete($tour->photo);
        $tour->delete();

        return redirect('/tour')->with('notify', 'Berhasil Menghapus Tour.');
    }

    function hotel(Tour $tour) {
        return view('dashboard.tour.hotel', [
            'title' => "Hotel $tour->name",
            'tour_id' => $tour->id,
            'hotels' => $tour->hotel()->paginate(10)
        ]);
    }

    function storeHotel(Request $request, $tour_id) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        $validated['tour_id'] = $tour_id;

        Hotel::create($validated);

        return redirect('/hotel/' . $tour_id)->with('notify', 'Berhasil Menambah Hotel.');
    }

    function destroyHotel($tour_id, $hotel_id) {
        Hotel::where('id', $hotel_id)->delete();

        return redirect('/hotel/' . $tour_id)->with('notify', 'Berhasil Menghapus Hotel.');
    }

    function updateHotel(Request $request, $tour_id, $hotel_id) {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        $validated['tour_id'] = $tour_id;

        Hotel::where('id', $hotel_id)->update($validated);

        return redirect('/hotel/' . $tour_id)->with('notify', 'Berhasil Mengubah Hotel.');
    }

    function storeOrder(Request $request, $tour_id) {
        $validated = $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['tour_id'] = $tour_id;

        TourOrder::create($validated);

        return redirect('/pesan')
            ->with('notify', 'Berhasil Memesan Tour.')
            ->with('notify', 'Menunggu Konfirmasi Tour Guide.');
    }

    function order() {
        return view('dashboard.pesanan.pesanan', [
            'title' => 'Pesanan Tour',
            'orders' => TourOrder::with('tour.user')->where('user_id', auth()->user()->id)->where('status', 'menunggu')->paginate(10)
        ]);
    }

    function destroyOrder($order_id) {
        TourOrder::where('id', $order_id)->delete();

        return redirect('/pesan')->with('notify', 'Berhasil Menghapus Pesanan.');
    }

    function adminOrder() {
        return view('dashboard.pesanan.adminPesanan', [
            'title' => 'Pesanan Tour',
            'orders' => TourOrder::with('user')->whereHas('tour', function($query) {
                return $query->where('user_id', auth()->user()->id);
            })->where('status', 'menunggu')->paginate(10)
        ]);
    }

    function confirmOrder($order_id) {
        TourOrder::where('id', $order_id)->update(['status' => 'dikonfirmasi']);

        return redirect('/admin/pesan')->with('notify', 'Berhasil Mengkonfirmasi Pesanan.');
    }

    function jadwal() {
        return view('dashboard.pesanan.jadwal', [
            'title' => 'Jadwal',
            'jadwals' => TourOrder::with(['tour.user', 'tour.hotel'])->where('user_id', auth()->user()->id)->where('status', 'dikonfirmasi')->orderBy('date', 'ASC')->orderBy('time', 'ASC')->paginate(10)
        ]);
    }

    function adminJadwal() {
        return view('dashboard.pesanan.adminJadwal', [
            'title' => 'Jadwal Tour',
            'jadwals' => TourOrder::with('tour.user')->whereHas('tour', function($query) {
                return $query->where('user_id', auth()->user()->id);
            })->where('status', 'dikonfirmasi')->orderBy('date', 'ASC')->orderBy('time', 'ASC')->paginate(10)
        ]);
    }

    function doneOrder($order_id) {
        TourOrder::where('id', $order_id)->update(['status' => 'selesai']);

        return redirect('/admin/jadwal')->with('notify', 'Berhasil Menyelesaikan Pesanan.');
    }

    function history() {
        return view('dashboard.pesanan.history', [
            'title' => 'Jadwal',
            'jadwals' => TourOrder::with(['tour.user', 'rating'])->where('user_id', auth()->user()->id)->where('status', 'selesai')->orderBy('date', 'ASC')->orderBy('time', 'ASC')->paginate(10)
        ]);
    }

    function rating(Request $request, $order_id, $user_id) {
        $validated = $request->validate([
            'rating' => 'required'
        ]);

        $validated['tour_order_id'] = $order_id;
        $validated['user_id'] = $user_id;

        Rating::create($validated);

        return redirect('/riwayat')->with('notify', 'Berhasil Memberikan Rating.');
    }

    function orderHotel(Request $request, TourOrder $order) {
        $order->update(['hotel_id' => $request->input('hotel_id')]);
        return redirect('/jadwal')->with('notify', 'Berhasil Memesan Hotel.');
    }
}
