<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'nama' => 'Pelanggan eFarm',
        //     'username' => 'admin',
        //     'password' => bcrypt('admin'),
        //     'konfirmasi_password' => bcrypt('admin'),
        //     'alamat_lengkap' => 'Jember',
        //     'id_user_role' => 2,
        //     'email' => 'admin@gmail.com',
        //     'email_verified_at' => now(),
        // ]);
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'nama' => 'Pelanggan eFarm'.$i,
                'username' => 'pelanggan'.$i,
                'password' => bcrypt('pelanggan'),
                'konfirmasi_password' => bcrypt('pelanggan'),
                'alamat_lengkap' => 'Jember',
                'id_user_role' => 2,
                'status' => 'Aktif',
                'profile_photo_path' => 'user.jpeg',
                'email' => 'pelangganaaa'.$i.'@gmail.com',
                'email_verified_at' => now(),
            ]);
        }
    }
}
