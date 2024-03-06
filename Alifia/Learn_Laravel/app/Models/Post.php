<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "laravel_belajar";
    protected $fillable = [
        "name",
        "email",
        "password",
    ];
};
