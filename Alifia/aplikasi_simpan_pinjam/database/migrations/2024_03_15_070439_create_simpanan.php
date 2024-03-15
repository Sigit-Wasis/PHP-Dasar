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
            $table->id();
            // $table->integer('id_tabungan')->unsigned();
            $table->enum('jenis_transaksi', ['Setoran', 'Penarikan']);
            $table->decimal('jumlah', 10, 2);
            $table->text('keterangan');
            $table->timestamps();

            // $table->foreign('id_tabungan')->references('id')->on('tabungan');
            $table->foreignId('tabungan_id')->references('id')->on('tabungan')->onUpdate('cascade')->onDelete('cascade');
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
