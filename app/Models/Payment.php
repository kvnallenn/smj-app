<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $fillable = [
        'nama_produk',
        'nama_user',
        'unit_produk',
        'harga_produk',
        'nama_user'
    ]; 
}
