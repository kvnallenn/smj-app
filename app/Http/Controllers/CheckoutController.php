<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        return view ('checkout.index', [
            "title" => "Checkout"
        ], compact('totalcart'));
    }

    public function store(Request $request)
    {
        $namauser = auth()->user()->name;
        $namaproduk = $request->nama_produk;
        $hargaproduk = $request->harga_produk;
        $unitproduk = $request->unit_produk;
        $totalproduk = $request->total_produk;

        
        foreach($namaproduk as $key => $no)
        {
            $input['nama_produk'] = $no;
            $input['harga_produk'] = $hargaproduk[$key];
            $input['unit_produk'] = $unitproduk[$key];
            $input['nama_user'] = $namauser;
            $input['totalharga_produk'] = $totalproduk;

            Checkout::create($input);
            return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');
        }

        // $data[]=$request->all();
        // $totalhargaproduk = $request->get('total_produk');
        // // dd($data);
        // $checkoutdata=[];
        // foreach($data as $d){
        //     $namauser = auth()->user()->name;
        //     $checkoutdata[]=[
        //        'nama_produk'=>implode(',',$d['nama_produk']),
        //        'harga_produk'=>implode(',',$d['harga_produk']),
        //        'unit_produk'=>implode(',',$d['unit_produk']),
        //        'totalharga_produk'=>$totalhargaproduk,
        //        'nama_user'=>$namauser,
               
        //     ];
        //  }
        //  DB::table('checkouts')->insert($checkoutdata);
        //  return redirect('/keranjang/')->with('notifikasi','Berhasil menambah ke keranjang!');
       
       
       
       
        // $dataSet = [];
        // $namauser = auth()->user()->name;
        // $a = $request->id_cart;
        // $kunciquery = Cart::find($a);
        // dd($kunciquery);

        // foreach($kunciquery as $row){
        
        //     $dataSet[] = [
        //         'nama_user'   => $namauser,
        //         'nama_produk' => $row,
        //     ];


        // }
        // DB::table('checkouts')->insert($dataSet);
        
           
    
   }


}
