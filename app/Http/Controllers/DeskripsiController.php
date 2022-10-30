<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Notification;

class DeskripsiController extends Controller
{
    public function update(Request $request, $id)
    {   
        $Validasidata = $request->validate([
            'berat_produk' => 'required',
            'jenis_produk' => 'required', 
            'ukuran_produk' => 'required',
            'warna_produk' => 'required',
        ]);

        $model = Product::find($id);
        $model->berat = $request->get('berat_produk');
        $model->jenis = $request->get('jenis_produk');
        $model->ukuran = $request->get('ukuran_produk');
        $model->warna = $request->get('warna_produk');
        $model->save();

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->objek = $model->kode_produk;
        $notif->save();
     
        

        return redirect('admin/adminproduk/detailproduk/'.$model->id)->with('notifikasiupdate','Produk berhasil diupdate');
    }
}
