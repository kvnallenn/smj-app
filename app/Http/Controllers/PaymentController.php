<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment; 
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Exports\PenjualanExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PaymentController extends Controller
{
    public function index()
    {
        return redirect('/keranjang');
    }

    public function store(Request $request)
    {


        $namauser = auth()->user()->name;
        $totalcart = Cart::where('nama_user','=',$namauser)->sum('unit_produk');
        $kirimcart = Cart::where('nama_user','=',$namauser)->get();
        $total = Cart::where('nama_user','=',$namauser)->sum(DB::raw('harga_produk*unit_produk'));
        $lockdata = $request->get('namaBank'); 

        if ($lockdata == null || $total == null ){
            return redirect('/checkout');
       }else{
            return view ('payment.index', [
                "title" => "Keranjang"
            ], compact('lockdata', 'totalcart', 'kirimcart', 'total'));
       }
      
    }

    public function exportexcel()
    {
        return Excel::download(new PenjualanExport,'penjualan.xlsx');
    }
}
