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
        Schema::create('master_drivers', function (Blueprint $table) {
            $table->uuid('driver_id')->primary();
            // $table->string('driver_id', 50);
            $table->string('Nomor_Kendaraan', 50)->nullable();
            $table->string('Alamat')->nullable();
            $table->string('Foto_Diri', 50)->nullable();
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
        Schema::dropIfExists('master__drivers');
    }
};
