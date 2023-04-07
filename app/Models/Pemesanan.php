<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    public $table = 'pemesanans';

    protected $guarded = ['id'];

    public function daftar_harga()
    {
        return $this->belongsToMany(DaftarHarga::class, 'jenis_id');
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
