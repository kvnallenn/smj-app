<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProdukController extends Controller
{
    public function index()
    {
        return view ('admin.adminproduk.index', [
            "title" => "Tambah Produk"
        ]);
    }
}