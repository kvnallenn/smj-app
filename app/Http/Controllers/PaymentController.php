<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Payment; 
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
      
    }

    public function store(Request $request)
    {


        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $kirimcart = Cart::where('nama_user','=',$namauser)->get();
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        $lockdata = $request->get('namaBank'); 

        if ($lockdata == null){
            return view ('checkout.index');
       }else{
            return view ('payment.index', [
                "title" => "Keranjang"
            ], compact('lockdata', 'totalcart', 'kirimcart', 'total'));
       }
      
    }
}
