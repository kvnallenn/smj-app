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
        $total = Cart::where('nama_user','=',$namauser)->sum('harga_produk');
        return view ('keranjang.index', [
            "title" => "Keranjang"
        ], compact('datacart', 'namauser', 'total'));
    }
   

    public function show($id)
    {
        
    }

    public function store(Request $request)
    {
        
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
