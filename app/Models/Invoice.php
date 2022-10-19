<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoices";
    protected $fillable = [
        'id_invoice',
        'invoice_produk',
        'nama_bank',
        'nama_user',
        'nama_produk',
        'unit_produk',
        'harga_produk',
        'gambar_produk',
    ]; 
}
