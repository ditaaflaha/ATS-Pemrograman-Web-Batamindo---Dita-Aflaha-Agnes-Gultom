<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.home'); // Mengarahkan ke resources/views/home.blade.php
    }

    public function contact()
    {
        return view('layouts.contact'); // resources/views/contact.blade.php
    }
}
