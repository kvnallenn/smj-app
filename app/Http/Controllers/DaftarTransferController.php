<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;

class DaftarTransferController extends Controller
{
    public function index()
    {   
        $namauser = auth()->user()->name;
        $datapay = Payment::where('nama_user','=',$namauser)->get();
        return view ('admin.daftartransfer.index', [
            "title" => "Keranjang"
        ], compact('datapay'));
    }

    public function update(Request $request, $id)
    {   

        $statuspay = Payment::find($id);
        $statuspay->status_transaksi = $request->get('status-payment');
        $statuspay->save();
    
        return redirect('admin/daftartransfer')->with('notifikasi','Kategori berhasil diupdate');
    }
}
