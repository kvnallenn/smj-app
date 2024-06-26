<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $model2 = Payment::where('status_pesanan','=',null)->get();
        $hitung = $model2->count();
        $notif = Notification::all();
        $model3 = Product::all();
        $hitung1 = $model3->count();
        $model4 = Category::all();
        $hitung2 = $model4->count();

        $total_harga = Invoice::select(DB::raw("CAST(SUM(harga_produk*unit_produk) as int) as harga_produk"))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('harga_produk');

        
        $bulan = Invoice::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->groupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        return view ('admin.index', [
            "title" => "Admin Page"
        ], compact('notif','hitung','hitung1','hitung2', 'total_harga', 'bulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Product::find($id);
        $model->delete();

        return redirect('admin/adminproduk')->with('notifikasi','Produk berhasil dihapus!');
    }
}
