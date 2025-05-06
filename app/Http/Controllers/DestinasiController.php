<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        return view('destinasi');
    }
}