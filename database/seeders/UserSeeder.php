<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Pelanggan',
            'username' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('pelanggan'),
            'alamat' => 'wates',
            'auth' => 'pelanggan',
            'nomor_telp' => '085678876',
        ])->assignRole("pelanggan");
    }
}
