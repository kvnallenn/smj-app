<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'kode_produk' => $row[1],
            'nama_produk' => $row[2],
            'kategori_produk' => $row[3],
            'kuantitas_produk' => $row[4],
            'unit_produk' => $row[5],
            'harga_produk' => $row[6],
            'image' => $row[7]
        
        ]);
    }
}
