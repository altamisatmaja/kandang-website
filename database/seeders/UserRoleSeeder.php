<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert([
            ['id' => 1, 'keterangan' => 'Admin'],
            ['id' => 2, 'keterangan' => 'Pelanggan'],
            ['id' => 3, 'keterangan' => 'Partner'],
        ]);
        
    }
}
