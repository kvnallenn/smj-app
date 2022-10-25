<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Notification;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::all();
        return view ('admin.kategoriproduk.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $Validasidata = $request->validate([
            'kode_kategori' => 'required|unique:categories', 
            'jenis_kategori' => 'required|unique:categories', 
        ]);


        $model = new Category;
        $model->kode_kategori = $request->get('kode_kategori');
        $model->jenis_kategori = $request->get('jenis_kategori');
        $model->save();

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->save();

        return redirect('admin/kategoriproduk')->with('notifikasi','Kategori berhasil ditambahkan');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   


        $model = Category::find($id);
        $model->kode_kategori = $request->get('edit_kodekategori');
        $model->jenis_kategori = $request->get('edit_jeniskategori');
        $model->save();

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->save();

        return redirect('admin/kategoriproduk')->with('notifikasi','Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = Category::find($id);
        $model->delete();

        $notif = new Notification;
        $notif->notifikasi = $request->get('pesan');
        $notif->nama_user = $request->get('nama_user');
        $notif->save();

        return redirect('admin/kategoriproduk')->with('notifikasi','Kategori berhasil dihapus!');
    }
}
