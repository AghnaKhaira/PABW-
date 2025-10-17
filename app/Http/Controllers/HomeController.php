<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // nanti kita buat file home.blade.php
    }

    public function about()
    {
        return view('about'); // nanti kita buat file about.blade.php
    }
}
