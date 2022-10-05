<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'employe',
        'alamat',
        'tanggal',
        'deskripsi',
        'gaji',
        'role',
        'active',
        'penulis',
        'pengalaman',
        'skill',
    ];
}
