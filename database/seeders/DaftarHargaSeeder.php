<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DaftarHarga;

class DaftarHargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $harga = DaftarHarga::create([
            "jenis" => "baju",
            "harga" => 10000
        ]);
        $harga = DaftarHarga::create([
            "jenis" => "boneka",
            "harga" => 12000
        ]);
    }
}
