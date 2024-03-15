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
        Schema::create('angsuran_pinjaman', function (Blueprint $table) {
            $table->id();
            // $table->integer('pinjaman_id')->unsigned();
            $table->decimal('jumlah_angsuran', 10, 2);
            $table->date('tanggal_angsuran');
            $table->string('status');
            $table->timestamps();
    
            // $table->foreign('pinjaman_id')->references('id')->on('pinjaman');
            $table->foreignId('pinjaman_id')->references('id')->on('pinjaman')->onUpdate('cascade')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsuran_pinjaman');
    }
};
