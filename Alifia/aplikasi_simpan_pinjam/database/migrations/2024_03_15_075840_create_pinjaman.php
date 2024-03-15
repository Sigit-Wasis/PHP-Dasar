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
            $table->id();
            // $table->integer('nasabah_id')->unsigned();
            $table->decimal('jumlah_pinjaman', 10, 2);
            $table->integer('jangka_waktu');
            $table->decimal('bunga', 5, 2);
            $table->decimal('angsuran_bulanan', 10, 2);
            $table->string('status');
            $table->timestamps();
    
            // $table->foreign('nasabah_id')->references('id')->on('nasabah');
            $table->foreignId('nasabah_id')->references('id')->on('nasabah')->onUpdate('cascade')->onDelete('cascade');
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
