<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        return view ('keranjang.index', [
            "title" => "Keranjang"
        ]);
    }
}
