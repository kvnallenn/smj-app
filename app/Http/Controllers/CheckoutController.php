<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        
         
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $aturcart = Cart::where('nama_user','=',$namauser)->get();
        $seluruhcart = Cart::all();
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        return view ('checkout.index', [
            "title" => "Checkout"
        ], compact('totalcart', 'aturcart','total'));
    }

    public function store(Request $request)
    {
       
   }

   public function detail(){
 
   }


}
