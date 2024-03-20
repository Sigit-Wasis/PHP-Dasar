<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'simpanan';
    protected $primaryKey = 'id_simpanan';

    protected $fillable = [
        'id_nasabah', // Tambahkan id_nasabah ke dalam fillable
        'id_karyawan',
        'nominal',
        'tanggal_simpanan',
        'waktu_simpanan',
        'keterangan',];

    public $timestamps = false;

    public function show($id)
    {
        $simpanan = Simpanan::find($id);
        if (!$simpanan) {
            abort(404); // Tampilkan halaman 404 jika data tidak ditemukan
        }

        return view('simpanan.show', compact('simpanan'));
    }

     public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah');
    }

    // Relasi dengan tabel karyawan
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
