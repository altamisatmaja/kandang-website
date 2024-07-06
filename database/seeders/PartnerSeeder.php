<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Partner eFarm',
            'username' => 'partner',
            'password' => bcrypt('partner'),
            'konfirmasi_password' => bcrypt('partner'),
            'alamat_lengkap' => 'Jember',
            'id_user_role' => 3,
            'email' => 'partner@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
