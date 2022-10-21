<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        
         
        $namauser = auth()->user()->name;
        $untukadmin = User::where(['name' => $namauser])->first();
        $jalan = $untukadmin->jalan;
        $kota = $untukadmin->kota;
        $kecamatan = $untukadmin->kecamatan;
        $notelp = $untukadmin->nomor_telepon;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $aturcart = Cart::where('nama_user','=',$namauser)->get();
        $seluruhcart = Cart::all();
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        
        if($jalan == null || $kota == null || $kecamatan == null || $notelp == null){
            return redirect('/user-settings/'.auth()->user()->id)->with('notifikasierror','Mohon Mengisi data terlebih dahulu');
        }else{
        return view ('checkout.index', [
            "title" => "Checkout"
        ], compact('totalcart', 'aturcart','total','untukadmin'));
    }
    }

    public function store(Request $request)
    {
       
   }

   public function detail(){
 
   }


}
