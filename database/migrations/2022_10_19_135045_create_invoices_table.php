<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('id_invoice');
            $table->string('invoice_produk');
            $table->string('nama_user');
            $table->timestamps();
            $table->string('nama_produk');
            $table->string('unit_produk');
            $table->string('harga_produk');
            $table->string('gambar_produk');
            $table->string('nama_bank');
            $table->string('jalan');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('nomor_telepon');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
