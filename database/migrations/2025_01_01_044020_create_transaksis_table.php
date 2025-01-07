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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto_increment
            // $table->foreignUuid('Transportasi_id');
            $table->foreignUuid('pesanan_id');
            $table->unsignedBigInteger('user_id');
            $table->foreignUuid('Driver_id');
            // $table->foreignUuid('Kampus_id');
            // $table->foreignUuid('Kampuss_id');
            $table->string('Penjemputan');
            $table->string('Tujuan');
            $table->enum('metode_pembayaran',['tunai','non-tunai']);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
