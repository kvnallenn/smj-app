<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailProdukController extends Controller
{
    public function show($id)
    {
        $datalistproduk = Product::find($id);
        return view ('admin.adminproduk.detailproduk.index', compact(
            'datalistproduk'
        ));
    }
}
