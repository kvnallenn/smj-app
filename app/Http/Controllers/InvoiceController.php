<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index($invoicep)
    {   
        $datainvoice = Invoice::where('invoice_produk','=',$invoicep)->get();
        $hitunginvoice = Invoice::where('invoice_produk','=',$invoicep)->sum(DB::raw('harga_produk*unit_produk'));
        $datacart = Payment::where('invoice_produk','=',$invoicep)->first();
        $kuncipayment = $datacart->status_transaksi;
        if ($kuncipayment == NULL)
        return redirect('/status-pesanan')->with('notifikasi','Harap Menunggu Konfirmasi Pembayaran');
        elseif ($kuncipayment == "Tolak")
        return redirect('/status-pesanan')->with('notifikasi','Proses Transaksi Telah Ditolak, Harap Menghubungi Admin');
        else
        return view ('invoices.index', compact(
            'datainvoice', 'hitunginvoice','datacart'
        ));
    }
}
