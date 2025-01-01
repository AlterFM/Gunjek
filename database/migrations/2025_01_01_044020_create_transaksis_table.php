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
            $table->unsignedBigInteger('Transportasi_id'); // Kolom foreign key tanpa auto_increment
            $table->unsignedBigInteger('user_id'); // Kolom foreign key tanpa auto_increment
            $table->unsignedBigInteger('Driver_id'); // Kolom foreign key tanpa auto_increment
            $table->unsignedBigInteger('Kampus_id'); // Kolom foreign key tanpa auto_increment
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
