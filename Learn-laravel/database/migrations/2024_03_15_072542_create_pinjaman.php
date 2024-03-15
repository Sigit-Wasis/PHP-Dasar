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
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->bigIncrements('id_pinjaman')->primary();
            $table->unsignedBigInteger('id_nasabah')->unique();
            $table->unsignedBigInteger('id_karyawan')->unique();
            $table->float('nominal');
            $table->date('tanggal_pinjaman');
            $table->time('waktu_pinjaman');
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
