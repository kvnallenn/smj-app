<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{   

    public function index()
    {
        
        $namauser = auth()->user()->name;
        $item = array();
        $datacart = Cart::where('nama_user','=',$namauser)->get();
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        return view ('keranjang.index', [
            "title" => "Keranjang"
        ], compact('datacart', 'namauser', 'total', 'totalcart', 'item'));
    }
   

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
         
        $namauser = auth()->user()->name;
        $lockproduk = $request->get('nama_produk'); 
        $kuncitasproduk = Cart::where(['nama_user' => $namauser, 'nama_produk' => $lockproduk])->first();
        
       if(empty($kuncitasproduk)){

            $model = new Cart;
            $model->nama_user = $request->get('nama_user');
            $model->nama_produk = $request->get('nama_produk');
            $model->harga_produk = $request->get('harga_produk');
            $model->unit_produk = $request->get('unit_produk');
            $model->image = $request->get('gambar_produk');
            $model->save();

            $stock = Product::where(['nama_produk' => $lockproduk])->first();
            $stockx = Cart::where(['nama_produk' => $lockproduk])->first();
            $unit_dibeli = $stockx->unit_produk;    
            $kuantitas_produk = $stock->kuantitas_produk; 
            $a = $kuantitas_produk - $unit_dibeli; 
            $stock->kuantitas_produk = $a;
            $stock->save();


        }elseif($lockproduk == $kuncitasproduk->nama_produk){
            
            $kuncidaridp = $request->get('unit_produk');
            $kunciquery = Cart::where(['nama_user' => $namauser, 'nama_produk' => $lockproduk])->first();
            $produkkunci = $kunciquery->unit_produk;
            if($kuncidaridp == 0){
             $stockupdate = $produkkunci+1;

            }else{
              $stockupdate = $produkkunci+$kuncidaridp;
              $kuncistockbaru = $stockupdate - $produkkunci;
              
              $stock = Product::where(['nama_produk' => $lockproduk])->first();
              $stockdata = $stock->kuantitas_produk;
              $stockdata = $stockdata-$kuncistockbaru;
              $stock->kuantitas_produk = $stockdata;
              $stock->save();
            }

            $kunciquery->unit_produk = $stockupdate;
            $kunciquery->save();

        }else{
            $model = new Cart;
            $model->nama_user = $request->get('nama_user');
            $model->nama_produk = $request->get('nama_produk');
            $model->harga_produk = $request->get('harga_produk');
            $model->unit_produk = $request->get('unit_produk');
            $model->image = $request->get('gambar_produk');
            $model->save();
        }

        return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');
   }

    public function destroy($id)
    {
        $model = Cart::find($id);
        $namap = $model->nama_produk;
        $uasli = $model->unit_produk;
        $untukproduk = 0;
        $untukproduk = $untukproduk-$uasli;
        
        $stock = Product::where(['nama_produk' => $namap])->first();
        $stockdb = $stock->kuantitas_produk;
        $stockdb = $stockdb - $untukproduk;
        $stock->kuantitas_produk = $stockdb;

        $stock->save();
        $model->delete();
        return redirect('/keranjang')->with('notifikasi','Berhasil menghapus produk dari keranjang!');
    }

    public function tambahq($id)
    {
        $model = Cart::find($id);
        $namap = $model->nama_produk;
        $uasli = $model->unit_produk; 
        $a = $uasli + 1;
        $model->unit_produk = $a;
        $untukproduk = $a - $uasli;

        
        $stock = Product::where(['nama_produk' => $namap])->first();
        $stockdb = $stock->kuantitas_produk;
        $stockdb = $stockdb - $untukproduk;
        $stock->kuantitas_produk = $stockdb;

        $model->save();
        $stock->save();
        return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');
    }

    public function kurangq($id)
    {
        $model = Cart::find($id);
        $namap = $model->nama_produk;
        $uasli = $model->unit_produk; 
        $decoy = $uasli-1;
        $untukproduk = $decoy-$uasli;
        if($decoy == 0){
          $stock = Product::where(['nama_produk' => $namap])->first();
          $stockdb = $stock->kuantitas_produk;
          $stockdb = $stockdb - $untukproduk;
          $stock->kuantitas_produk = $stockdb;

          $model->delete(); 
          $stock->save();
          return redirect('/keranjang/')->with('notifikasi','Keranjang telah dihapus!');
        }else{
          
          $stock = Product::where(['nama_produk' => $namap])->first();
          $stockdb = $stock->kuantitas_produk;
          $stockdb = $stockdb - $untukproduk;
          $stock->kuantitas_produk = $stockdb;
          
          $model->unit_produk = $decoy;
          $stock->save();
          $model->save();
          return redirect('/keranjang/')->with('notifikasi','Keranjang berhasil diubah!');

        }
        
    }


}
