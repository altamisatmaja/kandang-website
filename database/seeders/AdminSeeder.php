<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin eFarm',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'konfirmasi_password' => bcrypt('admin'),
            'alamat_lengkap' => 'Jember',
            'id_user_role' => 1,
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
