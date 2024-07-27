<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Anggota extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'nama_angg',
        'nomor_angg',
        'nomor_hp',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
