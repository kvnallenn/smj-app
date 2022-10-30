<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'kategori_produk',
        'kuantitas_produk',
        'unit_produk',
        'harga_produk'
    ]; 
}
