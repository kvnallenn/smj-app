<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    
    public function index(){
        
        $dataproduk = Product::all();
        return view ('shop.index', [
            "title" => "Mulai Belanja"
        ], compact('dataproduk'));
    }


}
