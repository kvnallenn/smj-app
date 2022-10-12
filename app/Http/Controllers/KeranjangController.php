<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class KeranjangController extends Controller
{   

    public function index()
    {
        
        $namauser = auth()->user()->name;
        $datacart = Cart::where('nama_user','=',$namauser)->get();
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $total = Cart::where('nama_user','=',$namauser)->sum('harga_produk');
        return view ('keranjang.index', [
            "title" => "Keranjang"
        ], compact('datacart', 'namauser', 'total', 'totalcart'));
    }
   

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
         
        $namauser = auth()->user()->name;
        $lockproduk = $request->get('nama_produk'); 
        $kuncitasproduk = Cart::where('nama_produk','=',$lockproduk)->first(); 
        
       if(empty($kuncitasproduk)){

            $model = new Cart;
            $model->nama_user = $request->get('nama_user');
            $model->nama_produk = $request->get('nama_produk');
            $model->harga_produk = $request->get('harga_produk');
            $model->unit_produk = $request->get('unit_produk');
            $model->image = $request->get('gambar_produk');
            $model->save();
            return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');

        }elseif($lockproduk == $kuncitasproduk->nama_produk){
            
            
            $kunciquery = Cart::where(['nama_user' => $namauser, 'nama_produk' => $lockproduk])->first();
            $produkkunci = $kunciquery->unit_produk;
            $produkkunci = $produkkunci+1;  
            $kunciquery->unit_produk = $produkkunci;
            $kunciquery->save();
            return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');

        }else{
            $model = new Cart;
            $model->nama_user = $request->get('nama_user');
            $model->nama_produk = $request->get('nama_produk');
            $model->harga_produk = $request->get('harga_produk');
            $model->unit_produk = $request->get('unit_produk');
            $model->image = $request->get('gambar_produk');
            $model->save();
            return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');
        }
   }

    public function destroy($id)
    {
        $model = Cart::find($id);
        $model->delete();
        return redirect('/keranjang')->with('notifikasi','Berhasil menghapus produk dari keranjang!');
    }


}
