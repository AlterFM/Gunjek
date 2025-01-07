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
        Schema::create('pesans', function (Blueprint $table) {
            $table->uuid('pesans_id')->primary();
            $table->string('Tujuan')->nullable();
            $table->string('Penjemputan')->nullable();
            $table->string('Jam', 50)->nullable();
            $table->date('Tanggal')->nullable();
            $table->longText('catatan')->nullable();
            $table->integer('id_user')->nullable();
            $table->foreignUuid('Tarif_id')->nullable();
            $table->enum('metode_daftar',['auto','manual'])->nullable();
            $table->enum('status',['tunggu','terima'])->default('tunggu')->nullable();
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
        Schema::dropIfExists('pesans');
    }
};
