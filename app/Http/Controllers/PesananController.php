<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Payment;

class PesananController extends Controller
{
    public function index()
    {   
        
        $model = Payment::all();
        $model1 = Payment::where('status_pesanan','=','Terkirim')->get();
        $model2 = Payment::where('status_pesanan','=',null)->get();
        $model3 = Payment::where('status_pesanan','=','Selesai')->get();
        return view ('admin.pesanan.index', [
            "title" => "Pesanan"
        ], compact('model','model1','model2','model3'));
    }

    public function update(Request $request, $id)
    {   

        $statuspay = Payment::find($id);
        $statuspay->status_pesanan = $request->get('status-pesanan');
        $statuspay->save();
    
        return redirect('admin/pesanan')->with('notifikasi','Kategori berhasil diupdate');
    }
}
