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
        Schema::table('users', function (Blueprint $table) {
            // Ubah kolom id jadi char(36)
            $table->char('id', 36)->change();

            // Tambah kolom telepon
            $table->string('telepon')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Kembalikan id jadi bigint unsigned auto increment
            $table->bigIncrements('id')->change();

            // Hapus kolom telepon
            $table->dropColumn('telepon');
        });
    }
};
