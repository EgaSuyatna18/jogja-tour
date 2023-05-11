<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class LandingPageController extends Controller
{
    function index() {
        return view('landing_page.index', [
            'title' => 'Tour Guide | Index',
            'tours' => Tour::with('user')->latest()->take(10)->get()
        ]);
    }
}
