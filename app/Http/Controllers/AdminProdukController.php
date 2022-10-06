<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminProdukController extends Controller
{
    public function index()
    {
        $datakategori = Category::all();
        $dataproduk = Product::all();
        return view ('admin.adminproduk.index', compact(
            'datakategori', 'dataproduk'
        ));

    }

    public function create()
    {
        

    }

    public function store(Request $request)
    {
        

        $Validasidata = $request->validate([
            'kode_produk' => 'required|unique:products', 
            'nama_produk' => 'required',
            'kategori_produk' => 'required', 
            'kuantitas_produk' => 'required',
            'unit_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'image|file|max:400', 
        ]);

        $model = new Product;
        $model->kode_produk = $request->get('kode_produk');
        $model->nama_produk = $request->get('nama_produk');
        $model->kategori_produk = $request->get('kategori_produk');
        $model->kuantitas_produk = $request->get('kuantitas_produk');
        $model->unit_produk = $request->get('unit_produk');
        $model->harga_produk = $request->get('harga_produk');
        $model->image = $request->file('gambar_produk')->store('post-images');
        $model->save();
 
        return redirect('admin/adminproduk')->with('notifikasiproduk','Produk berhasil ditambahkan');
       
    }

}
