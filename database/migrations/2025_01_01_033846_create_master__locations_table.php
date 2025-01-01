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
        Schema::create('master_locations', function (Blueprint $table) {
            $table->uuid('Kampus_id')->primary();
            // $table->string('Kampus_id', 50);
            $table->string('Nama_Kampus', 50);
            $table->string('Alamat_Kampus');
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
        Schema::dropIfExists('master__locations');
    }
};
