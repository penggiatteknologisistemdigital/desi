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
            Schema::create('tbl_baliho', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_baliho');
            $table->string('lokasi_baliho');
            $table->string('koordinat_baliho')->nullable();
            $table->string('foto_baliho');
            $table->string('ukuran_baliho');
            $table->string('layout_baliho');
            $table->timestamps();
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
