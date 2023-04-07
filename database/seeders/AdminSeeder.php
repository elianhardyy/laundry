<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'admin@laundry.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'admin',
            'auth' => 'admin',
            'nomor_telp' => '087578987',
        ])->assignRole("admin");
    }
}
