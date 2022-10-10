<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class DetailProdukController extends Controller
{
    public function show($id)
    {
        $datalistproduk = Product::find($id);
        $datalistkategori = Category::all();
        return view ('admin.adminproduk.detailproduk.index', compact(
            'datalistproduk', 'datalistkategori'
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

        return redirect('admin/adminproduk/detailproduk/'.$model->id)->with('notifikasiupdate','Produk berhasil diupdate');
    }
}
