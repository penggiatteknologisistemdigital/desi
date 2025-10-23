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
        Schema::create('pesan_titik_baliho', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->char('kode_trans', 36)->unique();
            $table->char('baliho_id', 36)->nullable();
            $table->char('user_id', 36)->nullable();
            $table->char('instansi_id', 36)->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->text('keterangan_event')->nullable();
            $table->string('upload_surat', 255)->nullable();
            $table->string('no_surat', 255)->nullable();
            $table->date('tgl_surat')->nullable();
            $table->string('perihal_surat', 255)->nullable();
            $table->string('upload_desain', 255)->nullable();
            $table->string('upload_lepas_baliho', 255)->nullable();
            $table->string('nama_pic', 255)->nullable();
            $table->string('tlp_pic', 50)->nullable();
            $table->integer('status_pakai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_titik_baliho');
    }
};
