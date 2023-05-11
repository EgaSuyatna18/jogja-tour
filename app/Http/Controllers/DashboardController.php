<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tour;
use App\Models\TourOrder;

class DashboardController extends Controller
{
    function login() {
        return view('auth.login', ['title' => 'Login']);
    }

    function register() {
        return view('auth.register', ['title' => 'Register']);
    }

    function redirect() {
        if(auth()->user()->role == 'tour-guide') {
            return redirect('/dashboard')->with('notify', 'Berhasil Login.');
        }else if(auth()->user()->role == 'tourist') {
            return redirect('/')->with('notify', 'Berhasil Login.');
        }
    }

    function index() {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'tourGuide' => User::where('role', 'tour-guide')->count(),
            'tourist' => User::where('role', 'tourist')->count(),
            'tour' => Tour::count(),
            'tourOrder' => TourOrder::where('status', 'selesai')->count()
        ]);
    }
}
