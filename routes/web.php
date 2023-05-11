<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourGuideController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [LandingPageController::class, 'index']);

// auth
route::get('/login', [DashboardController::class, 'login']);
route::get('/register', [DashboardController::class, 'register']);
route::get('/logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});

// dashboard
route::get('/redirect', [DashboardController::class, 'redirect']);
route::get('/dashboard', [DashboardController::class, 'index']);

// artikel
route::resource('artikel', ArtikelController::class);
route::get('/home/artikel', [ArtikelController::class, 'homeArtikel']);

// tour
route::resource('tour', TourController::class);

route::get('/hotel/{tour}', [TourController::class, 'hotel']);
route::post('/hotel/{tour_id}', [TourController::class, 'storeHotel']);
route::delete('/hotel/{tour_id}/{hotel_id}', [TourController::class, 'destroyHotel']);
route::put('/hotel/{tour_id}/{hotel_id}', [TourController::class, 'updateHotel']);

route::post('/tour/{tour_id}/order', [TourController::class, 'storeOrder']);
route::get('/pesan', [TourController::class, 'Order']);
route::delete('/pesan/{order_id}', [TourController::class, 'destroyOrder']);
route::get('/jadwal', [TourController::class, 'jadwal']);
route::get('/riwayat', [TourController::class, 'history']);
route::post('/riwayat/{order_id}/{user_id}/rating', [TourController::class, 'rating']);
route::post('/tour/{order}/hotel', [TourController::class, 'orderHotel']);

route::get('/admin/pesan', [TourController::class, 'adminOrder']);
route::get('/admin/pesan/{order_id}/konfirmasi', [TourController::class, 'confirmOrder']);
route::get('/admin/jadwal', [TourController::class, 'adminJadwal']);
route::get('/admin/pesan/{order_id}/selesai', [TourController::class, 'doneOrder']);


// tour-guide
route::get('/home/tour_guide', [TourGuideController::class, 'index']);
route::get('/home/tour_guide/{tourGuide}', [TourGuideController::class, 'show']);