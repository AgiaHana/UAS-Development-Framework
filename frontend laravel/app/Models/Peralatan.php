<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Peralatan extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'nama_alat',
        'perlangkapan',
        'warna',
        'merk',
        'jumlah',
        'tersedia',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
