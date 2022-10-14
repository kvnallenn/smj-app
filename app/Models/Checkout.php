<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = "checkouts";
    protected $fillable = [
        'nama_produk',
        'unit_produk',
        'harga_produk',
        'nama_user',
        'totalharga_produk',
        'image'
    ]; 
}
