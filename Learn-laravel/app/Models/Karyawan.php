<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
     public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'sex',
        'notelp',
        'email',
        'password',
    ];
}
