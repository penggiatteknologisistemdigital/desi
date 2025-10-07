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
            // tambah kolom instansi_id dan role_id
            $table->char('instansi_id', 36)->nullable()->after('id');
            $table->char('role_id', 36)->nullable()->after('instansi_id');

            // buat foreign key ke tbl_instansi dan tbl_role
            $table->foreign('instansi_id')
                    ->references('id')
                    ->on('tbl_instansi')
                    ->onDelete('set null');

            $table->foreign('role_id')
                    ->references('id')
                    ->on('tbl_role')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // drop foreign key dulu sebelum drop kolom
            $table->dropForeign(['instansi_id']);
            $table->dropForeign(['role_id']);

            $table->dropColumn(['instansi_id', 'role_id']);
        });
    }
};
