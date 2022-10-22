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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('nama_rek');
            $table->string('nomor_rek');
            $table->string('nominal_transfer');
            $table->timestamps();
            $table->string('invoice_produk');
            $table->string('bukti_transfer');
            $table->string('nama_bank');
            $table->string('status_transaksi')->nullable();
            $table->string('status_pesanan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
