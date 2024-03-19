<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $primaryKey = 'id_nasabah';
    protected $table = 'nasabah'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'id_nasabah', 'nama', 'alamat', 'tanggal_lahir', 'sex', 'notelp', 'email', 'password' // Kolom-kolom yang bisa diisi
    ];

    public $timestamps = false;
}
