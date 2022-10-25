<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Stock;

class DaftarTransferController extends Controller
{
    public function index()
    {   
        $namauser = auth()->user()->name;
        $datapay = Payment::all();
        return view ('admin.daftartransfer.index', [
            "title" => "Keranjang"
        ], compact('datapay'));
    }

    public function update(Request $request, $id)
    {   

        $statuspay = Payment::find($id);
        $statuspay->status_transaksi = $request->get('status-payment');
        $statuspay->save();
    
        return redirect('admin/daftartransfer')->with('notifikasi','Kategori berhasil diupdate');
    }

    public function updateproduk(Request $request, $id)
    {   

        $statuspay = Product::find($id);
        
        $stockdtg = $request->get('stock-update');
        $idproduk = $request->get('id-produk');
        $alasan = $request->get('alasan');
        $stockskrg = $statuspay->kuantitas_produk; 

        if ( ($stockskrg+$stockdtg)<=0){
          return redirect('admin/adminproduk/detailproduk/'.$statuspay->id)->with('notifikasigagal','Produk Tidak Boleh Minus Atau Nol ( 0 )');
        }else{
          $stockskrg = $stockskrg+$stockdtg;
          $statuspay->kuantitas_produk = $stockskrg;

          $opname = new Stock();
          $opname->alasan = $alasan;
          $opname->jumlah = $stockdtg;
          $opname->id_produk = $idproduk;

          $opname->save();
          $statuspay->save();
          return redirect('admin/adminproduk/detailproduk/'.$statuspay->id)->with('notifikasi','Berhasil Melakukan Stock Opname');
        }
    }

    public function deleteopname(Request $request, $id)
    {   
        
        $kunciid = $request->get('id-produk');
        $models = Stock::find($id);
        $kuncipalsu = $models->jumlah; 
        $modelp = Product::find($kunciid);
        $kuncipasli = $modelp->kuantitas_produk;

            
        if ( $kuncipalsu < 0 ){
            $kuncipasli = $kuncipasli-$kuncipalsu;
        }
        else{
            $kuncipasli = $kuncipasli-$kuncipalsu;
        }

        $modelp->kuantitas_produk = $kuncipasli;
        $modelp->save();

        $models->delete();
        return redirect('/admin/adminproduk/detailproduk/'.$kunciid)->with('notifikasi','Stock Opname Diupdate!');
    }
   
}
