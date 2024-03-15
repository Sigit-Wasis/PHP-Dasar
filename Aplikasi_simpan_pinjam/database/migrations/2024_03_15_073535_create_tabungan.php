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
        Schema::create('tabungan', function (Blueprint $table) {
            $table->id();
            // $table->integer('nasabah_id')->unsigned();
            $table->string('jenis_tabungan');
            $table->decimal('saldo', 10, 2);
            $table->decimal('bunga', 5, 2);
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
        Schema::dropIfExists('tabungan');
    }
};