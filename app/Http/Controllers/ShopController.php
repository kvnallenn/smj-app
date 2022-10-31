<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    
    public function index(){
        
    if (Auth::check())
    {
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $dataproduk = Product::paginate(12);
        $totalrating = Rating::all()->sum('rating');
        $jumlahrating = Rating::all()->count('rating');
        $hitungrata = $totalrating/$jumlahrating;
        $cekalamat = User::where('name','=',$namauser)->first();
        return view ('shop.index', [
            "title" => "Mulai Belanja"
        ], compact('dataproduk', 'namauser', 'totalcart','cekalamat','hitungrata'));
    }
    else{
        return view ('/login.index', [
            "title" => "Login"
        ]);
    }
        
    }


}
