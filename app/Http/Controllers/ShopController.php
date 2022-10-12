<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    
    public function index(){
        
    if (Auth::check())
    {
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $dataproduk = Product::all();
        return view ('shop.index', [
            "title" => "Mulai Belanja"
        ], compact('dataproduk', 'namauser', 'totalcart'));
    }
    else{
        return view ('/login.index', [
            "title" => "Login"
        ]);
    }
        
    }


}
