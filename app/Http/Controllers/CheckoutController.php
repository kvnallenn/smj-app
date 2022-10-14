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
        return view ('checkout.index', [
            "title" => "Checkout"
        ], compact('totalcart'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
   
       

        if (count(array($data['nama_produk'] > 0))){
            foreach($data['nama_produk'] as $item => $value){
                $data2 = array(
                    'nama_produk' => $data['nama_produk'][$item],
                    'unit_produk' => $data['unit_produk'][$item],
                    'harga_produk' => $data['harga_produk'][$item],
                    'nama_user' =>$data['nama_user'][$item],
                    'totalharga_produk' => $data['harga_produk'][$item]*$data['unit_produk'][$item],
                    'image'=>$data['gambar_produk'][$item],
                );
            
                Checkout::create($data2);

            }
            
            return redirect('/checkout')->with('notifikasi','Berhasil menambah ke keranjang!');

        }
   }

   public function detail(){
      $namauser = auth()->user()->name;
      $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
      $totalck = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
      $model = Checkout::all();
       return view ('checkout.index', 
       compact('model', 'totalcart', 'totalck'));
   }


}
