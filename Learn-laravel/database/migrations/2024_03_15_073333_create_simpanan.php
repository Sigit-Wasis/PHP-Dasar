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
        Schema::create('simpanan', function (Blueprint $table) {
            $table->bigIncrements('id_simpanan')->primary();
            $table->unsignedBigInteger('id_nasabah')->unique();
            $table->unsignedBigInteger('id_karyawan')->unique();
            $table->float('nominal');
            $table->date('tanggal_simpanan');
            $table->time('waktu_simpanan');
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simpanan');
    }
};
