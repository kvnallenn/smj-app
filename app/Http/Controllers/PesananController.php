<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Exports\ProdukExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Rating;

class PesananController extends Controller
{
    public function index()
    {   
        
        $model = Payment::all();
        $hitungmodel = $model->count();
        $model1 = Payment::where('status_pesanan','=','Terkirim')->get();
        $model2 = Payment::where('status_pesanan','=',null)->get();
        $hitungmodel2 = $model2->count();
        $model3 = Payment::where('status_pesanan','=','Selesai')->get();
        $hitungmodel3 = $model3->count();
        $model4 = Payment::where('status_pesanan','=','Komplain')->get();
        $hitungmodel4 = $model4->count();
        return view ('admin.pesanan.index', [
            "title" => "Pesanan"
        ], compact('model','model1','model2','model3','model4','hitungmodel','hitungmodel3', 'hitungmodel4', 'hitungmodel2'));
    }

    public function update(Request $request, $id)
    {   

        $statuspay = Payment::find($id);
        $statuspay->status_pesanan = $request->get('status-pesanan');

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->objek = $statuspay->invoice_produk;

        $notif->save();
        $statuspay->save();
    
        return redirect('admin/pesanan')->with('notifikasi','Kategori berhasil diupdate');
    }

    public function pesanan(Request $request)
    {   

        $kodeinvoice = $request->get('kode-invoice');
        $model = Payment::where('invoice_produk','=',$kodeinvoice)->first();
        $model->status_pesanan = $request->get('status-pengiriman');
        $model->save();

        $rating = new Rating;
        $namauser = auth()->user()->name;
        $rating->rating = $request->get('bintang');
        $rating->komentar = $request->get('komentar');
        $rating->gambar_produk = $request->file('gambar_produk')->store('rating-images');
        $rating->nama_user = $namauser;
        $rating->save();


        return redirect('/status-pesanan');
    }

    public function exportproduk()
    {
        return Excel::download(new ProdukExport,'produk.xlsx');
    }

    public function norating(Request $request)
    {
        $kodeinvoice = $request->get('kode-invoice');
        $model = Payment::where('invoice_produk','=',$kodeinvoice)->first();
        $model->status_pesanan = $request->get('status-pengiriman');
        $model->save();

        return redirect('/status-pesanan');
    }

 
}
