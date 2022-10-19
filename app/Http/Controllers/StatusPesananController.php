<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StatusPesananController extends Controller
{
    public function index()
    {
        
        $namauser = auth()->user()->name;
        $datacart = Cart::where('nama_user','=',$namauser)->get();
        $datapay = Payment::where('nama_user','=',$namauser)->get();
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        return view ('status-pesanan.index', [
            "title" => "Keranjang"
        ], compact('datacart', 'namauser', 'total', 'totalcart', 'datapay'));
       
    }

    public function store(Request $request)
    {

        $Validasidata = $request->validate([ 
            'nama_rek' => 'required',
            'nominal_transfer' => 'required', 
            'nomor_rek' => 'required',
            'bukti_transfer' => 'required|image|file|max:400', 
        ]);

        $model = new Payment();
        $namauser = auth()->user()->name;
        $randomString = Str::random(10);
        $model->nama_user = $namauser;
        $model->nama_rek = $request->get('nama_rek');
        $model->nominal_transfer = $request->get('nominal_transfer');
        $model->nomor_rek = $request->get('nomor_rek');
        $model->nama_bank = $request->get('nama_bank');
        $model->invoice_produk = $randomString;
        $model->bukti_transfer = $request->file('bukti_transfer')->store('bukti-transfer');
        $model->save();

        $hapus = Cart::where(['nama_user' => $namauser]);
        $hapus->delete();
        return redirect('/keranjang')->with('notifikasi','Berhasil menghapus produk dari keranjang!');
    }

}
