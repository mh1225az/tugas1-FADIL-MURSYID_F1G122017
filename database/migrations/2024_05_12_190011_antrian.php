<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antrian', function (Blueprint $table) {
           $table->id();
           $table->string('no_antrian', 45);
           $table->string('status_antrian');
           $table->unsignedBigInteger('pasien_id');
           $table->unsignedBigInteger('dokter_id');
           $table->foreign('pasien_id')->references('id')->on('pasien');
           $table->foreign('dokter_id')->references('id')->on('dokter');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
