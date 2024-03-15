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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi')->primary();
            $table->unsignedBigInteger('id_nasabah')->unique();
            $table->unsignedBigInteger('id_karyawan')->unique();
            $table->float('nominal');
            $table->date('tanggal_transaksi');
            $table->string('jenis_transaksi');
            $table->time('waktu_transaksi');
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
