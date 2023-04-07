<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHarga extends Model
{
    use HasFactory;


    protected $guarded = ['id'];
    public $table = "daftar_hargas";

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
