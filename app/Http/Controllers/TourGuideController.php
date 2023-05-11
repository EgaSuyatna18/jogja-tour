<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TourGuideController extends Controller
{
    function index() {
        return view('landing_page.tour_guide', [
            'title' => 'Tour Guide',
            'tourGuides' => User::with('rating')->where('role', 'tour-guide')->latest()->paginate('8')
        ]);
    }

    function show(User $tourGuide) {
        if($tourGuide->role == 'tourist') {
            return redirect('/home/tour_guide')->with('notify', 'Silahkan Lihat Tour Guide Kami.');
        }
        
        $tourGuide->with(['tour', 'rating']);

        return view('landing_page.tour_guide_show', [
            'title' => $tourGuide->name,
            'tourGuide' => $tourGuide,
            'tours' => $tourGuide->tour()->paginate(8)
        ]);
    }
}
