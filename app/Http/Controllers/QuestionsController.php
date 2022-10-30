<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

class QuestionsController extends Controller
{
    public function store( Request $request )
    {

        $Validasidata = $request->validate([
            'pertanyaanText' => 'required', 
        ]);

        $namauser = auth()->user()->name;
        $model = new Question;
        $model->id_produk = $request->get('id_produk');
        $model->nama_user = $namauser;
        $model->pertanyaan = $request->get('pertanyaanText');
        $model->save();

        return redirect('/produk/'.$model->id_produk);   

    }
}
