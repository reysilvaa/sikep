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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->char('no_kk', 16)->primary();
            $table->string('kepala_keluarga', 100);
            $table->text('alamat');
            $table->integer('RT');
            $table->integer('RW')->default(02);
            $table->char('kode_pos', 8)->default('65115');
            $table->string('kelurahan', 20)->default('Gadingkasri');
            $table->string('kecamatan', 20)->default('Klojen');
            $table->string('kota', 20)->default('Malang');
            $table->string('provinsi', 20)->default('Jawa Timur');
            $table->string('image_kk', 100);
            $table->integer('tagihan_listrik');
            $table->integer('luas_bangunan');
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Menunggu']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluarga');
    }
};
