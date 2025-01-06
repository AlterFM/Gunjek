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
        Schema::create('tarifs', function (Blueprint $table) {
            // $table->id(); // Ini adalah kolom auto_increment dan primary key
            $table->string('Tarif_id', 50)->unique(); // Kolom unik untuk ID Tarif
            $table->string('Tujuan')->nullable();
            $table->string('Penjemputan')->nullable();
            $table->integer('Harga')->nullable(); // Tidak menggunakan auto_increment
            $table->string('Jam', 50)->nullable();
            $table->date('Tanggal')->nullable();
            $table->longText('catatan')->nullable();
            $table->enum('status',['off','on'])->nullable();
            $table->integer('id_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifs');
    }
};
