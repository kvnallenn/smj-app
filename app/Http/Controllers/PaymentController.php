<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        return view ('payment.index', [
            "title" => "Keranjang"
        ], compact('totalcart'));
    }
}
