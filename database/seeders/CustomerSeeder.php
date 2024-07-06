<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Pelanggan eFarm',
            'username' => 'pelanggan',
            'password' => bcrypt('pelanggan'),
            'konfirmasi_password' => bcrypt('pelanggan'),
            'alamat_lengkap' => 'Jember',
            'id_user_role' => 2,
            'email' => 'pelanggan@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
