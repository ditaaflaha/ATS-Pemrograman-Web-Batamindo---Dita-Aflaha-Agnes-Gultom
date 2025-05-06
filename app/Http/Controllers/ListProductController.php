<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function tampilkan()
    {
        $data = [
            ['id' => 1, 'produk' => 'Headphone Sony'],
            ['id' => 2, 'produk' => 'Keyboard Mechanical'],
            ['id' => 3, 'produk' => 'Printer Canon'],
        ];

        return view('list_product', [
            'data' => $data
        ]);
    }
}
