<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Exports\ProdukExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Question;

class ProdukController extends Controller
{
    public function index()
    {
        return redirect('/shop');
    }

    public function show($id)
    {
        $namauser = auth()->user()->name;
        $totalrating = Rating::all();
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $totalpertanyaan = Question::where('id_produk','=',$id)->get();
        $dataproduk = Product::find($id);
        return view ('produk.index', [
            "title" => "Keranjang"
        ], compact('dataproduk','totalcart','totalpertanyaan','totalrating'));
    }

   
}
