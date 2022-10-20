<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PDF;

class InvoiceController extends Controller
{
    public function index($invoicep)
    {   
        $datainvoice = Invoice::where('invoice_produk','=',$invoicep)->get();
        $hitunginvoice = Invoice::where('invoice_produk','=',$invoicep)->sum(DB::raw('harga_produk*unit_produk'));
        $datacart = Payment::where('invoice_produk','=',$invoicep)->first();
        $kuncipayment = $datacart->status_transaksi;
        $namauser = auth()->user()->name;
        $untukadmin = User::where(['name' => $namauser])->first();
        $kunciadmin = $untukadmin->is_admin;

        if ($kunciadmin == "1")
        return view ('invoices.index', compact(
            'datainvoice', 'hitunginvoice','datacart'
        ));
        elseif ($kuncipayment == "Sukses")
        return view ('invoices.index', compact(
            'datainvoice', 'hitunginvoice','datacart'
        ));
        elseif ($kuncipayment == "Tolak")
        return redirect('/status-pesanan')->with('notifikasi','Proses Transaksi Telah Ditolak, Harap Menghubungi Admin');
        elseif ($kuncipayment == NULL)
        return redirect('/status-pesanan')->with('notifikasi','Harap Menunggu Konfirmasi Pembayaran');
        else
        return view ('invoices.index', compact(
            'datainvoice', 'hitunginvoice','datacart'
        ));
    }

    
}
