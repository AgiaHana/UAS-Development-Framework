<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_alat',
        'warna',
        'merk',
        'catatan',
    ];
}
