<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index() {
        return view('landing_page.index', ['title' => 'Tour Guide | Index']);
    }
}
