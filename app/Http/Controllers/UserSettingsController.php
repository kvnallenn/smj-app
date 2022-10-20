<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;

class UserSettingsController extends Controller
{
    public function index($id)
    {
    $namauser = auth()->user()->name;
    $sesiuser = auth()->user()->id;
    $sesiadmin = auth()->user()->is_admin;
    $datacart = Cart::where('nama_user','=',$namauser)->get();
    $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
    $userprofile = User::where('id','=',$id)->first();
    if( $userprofile == null){
        return redirect(url('/user-settings/'.$sesiuser)); 
    }else{
    $lockid = $userprofile->id;
    }
    
    if ($lockid == $sesiuser){
    return view ('user-settings.index', [
        "title" => "User Settings"
    ], compact('datacart','totalcart','userprofile'));
    }
    elseif($sesiadmin == 1){
    return view ('user-settings.index', [
        "title" => "User Settings"
    ], compact('datacart','totalcart','userprofile'));

    }
    else{
      return redirect(url('/user-settings/'.$sesiuser));
    }
    }


    public function update(Request $request, $id)
    {   


        $model = User::find($id);
        $model->jalan = $request->get('jalan');
        $model->kota = $request->get('kota');
        $model->nomor_telepon = $request->get('nomor_telepon');
        $model->kecamatan = $request->get('kecamatan');
        $model->save();

        

        return redirect(url('/user-settings/'.$model->id))->with('notifikasi','Data berhasil diupdate');
    }
}
