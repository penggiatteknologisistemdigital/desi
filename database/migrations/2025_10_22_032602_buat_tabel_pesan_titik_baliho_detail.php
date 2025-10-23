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
        Schema::create('pesan_titik_baliho_detail', function (Blueprint $table) {
            $table->id();
            $table->char('kode_trans_fk', 36);
            $table->date('tanggal')->nullable();
            $table->char('baliho_id', 36)->nullable();
            $table->timestamps();

            // Relasi ke tabel utama
            $table->foreign('kode_trans_fk')
                ->references('kode_trans')
                ->on('pesan_titik_baliho')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_titik_baliho_detail');
    }
};
