<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function login() {
        return view('auth.login', ['title' => 'Login']);
    }

    function register() {
        return view('auth.register', ['title' => 'Register']);
    }

    function index() {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
}
