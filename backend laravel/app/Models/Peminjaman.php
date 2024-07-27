<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mapala',
        'univ',
        'nama_peminjaman',
        'nama_alat',
        'jumlah',
        'no_hp',
    ];
}
