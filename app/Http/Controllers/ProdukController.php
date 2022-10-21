<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        return redirect('/shop');
    }

    public function show($id)
    {
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $dataproduk = Product::find($id);
        return view ('produk.index', [
            "title" => "Keranjang"
        ], compact('dataproduk','totalcart'));
    }
}
