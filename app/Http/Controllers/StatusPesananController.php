<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Cart;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use PDF;

class StatusPesananController extends Controller
{
    public function index()
    {
        
        $namauser = auth()->user()->name;
        $datacart = Cart::where('nama_user','=',$namauser)->get();
        $datapay = Payment::where('nama_user','=',$namauser)->get();
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        return view ('status-pesanan.index', [
            "title" => "Keranjang"
        ], compact('datacart', 'namauser', 'total', 'totalcart', 'datapay'));
       
    }

    public function store(Request $request)
    {

        $Validasidata = $request->validate([ 
            'nama_rek' => 'required',
            'nominal_transfer' => 'required', 
            'nomor_rek' => 'required',
            'bukti_transfer' => 'required|image|file|max:400', 
        ]);

        $model = new Payment();
        $namauser = auth()->user()->name;
        $randomString = Str::random(10);
        $model->nama_user = $namauser;
        $model->nama_rek = $request->get('nama_rek');
        $model->nominal_transfer = $request->get('nominal_transfer');
        $model->nomor_rek = $request->get('nomor_rek');
        $model->nama_bank = $request->get('nama_bank');
        $model->invoice_produk = $randomString;
        $model->bukti_transfer = $request->file('bukti_transfer')->store('bukti-transfer');
        $model->save();

        $profileinvoice = User::where(['name' => $namauser])->first();
        
        $data = $request->all();
        if (count(array($data['nama_produk']>0))){
            foreach($data['nama_produk'] as $item=>$value){
                $data2 = array(
                    'id_invoice'=>$model->id,
                    'invoice_produk'=>$model->invoice_produk,
                    'nama_user'=>$model->nama_user,
                    'nama_bank'=>$model->nama_bank,
                    'nama_produk'=>$data['nama_produk'][$item],
                    'unit_produk'=>$data['unit_produk'][$item],
                    'harga_produk'=>$data['harga_produk'][$item],
                    'gambar_produk'=>$data['gambar_produk'][$item],
                    'jalan'=>$profileinvoice->jalan,
                    'kota'=>$profileinvoice->kota,
                    'kecamatan'=>$profileinvoice->kecamatan,
                    'nomor_telepon'=>$profileinvoice->nomor_telepon,
                    
                );
                Invoice::create($data2);
            }
        }

        $hapus = Cart::where(['nama_user' => $namauser]);
        $hapus->delete();
        return redirect('/status-pesanan');
    }

    public function cetak_invoice($invoicep){


        
        $datainvoice = Invoice::where('invoice_produk','=',$invoicep)->get();
        $hitunginvoice = Invoice::where('invoice_produk','=',$invoicep)->sum(DB::raw('harga_produk*unit_produk'));
        $datacart = Payment::where('invoice_produk','=',$invoicep)->first();
        $kuncipayment = $datacart->status_transaksi;
        $namauser = auth()->user()->name;
        $untukadmin = User::where(['name' => $namauser])->first();
        $kunciadmin = $untukadmin->is_admin;

        
        $pdf = PDF::loadview('cetak-invoice.index', compact('datainvoice', 'hitunginvoice','datacart'));
        return $pdf->download('invoice.pdf');
      
    }

    public function komplain(Request $request)
    {   

    
        $Validasidata = $request->validate([
            'alasan_komplain' => 'required',
            'gambar_komplain' => 'required|image|file|max:400', 
        ]);

        $kunciinvoice = $request->get('kunci-invoice');
        $model = Payment::where('invoice_produk','=',$kunciinvoice)->first();
        $model->alasan_komplain = $request->get('alasan_komplain');
        $model->gambar_komplain = $request->file('gambar_komplain')->store('komplain-images');
        $model->status_pesanan = $request->get('status-komplain');
        $model->save();
 
        return redirect('/status-pesanan');
       
    }

    public function komplainstatus(Request $request)
    {   


        $kunciinvoice = $request->get('komplain-invoice');
        $model = Payment::where('invoice_produk','=',$kunciinvoice)->first();
        $model->status_pesanan = $request->get('komplain-status');
        $model->save();
 
        return redirect('/status-pesanan');
       
    }

}
