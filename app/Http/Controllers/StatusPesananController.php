<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StatusPesananController extends Controller
{
    public function index()
    {
        
        return view ('status-pesanan.index');
       
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


    }

}
