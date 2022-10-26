<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\Stock;
use App\Models\Notification;

class DetailProdukController extends Controller
{
    public function show($id)
    {
        $datalistproduk = Product::find($id);
        $nama_produk = $datalistproduk->nama_produk;
        $datalistkategori = Category::all();
        $dataopname = Stock::where('id_produk', '=', $id)->get();
        $datainvoice = Invoice::where('nama_produk','=',$nama_produk)->get();
        return view ('admin.adminproduk.detailproduk.index', compact(
            'datalistproduk', 'datalistkategori', 'datainvoice', 'dataopname'
        ));
    }

    public function update(Request $request, $id)
    {   
        $Validasidata = $request->validate([
            'nama_produk' => 'required',
            'kategori_produk' => 'required', 
            'unit_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required|image|file|max:400', 
        ]);

        $model = Product::find($id);
        $model->nama_produk = $request->get('nama_produk');
        $model->kategori_produk = $request->get('kategori_produk');
        $model->unit_produk = $request->get('unit_produk');
        $model->harga_produk = $request->get('harga_produk');
        $model->image = $request->file('gambar_produk')->store('post-images');
        $model->save();

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->objek = $model->kode_produk;
        $notif->save();

        

        return redirect('admin/adminproduk/detailproduk/'.$model->id)->with('notifikasiupdate','Produk berhasil diupdate');
    }

    
  
}
