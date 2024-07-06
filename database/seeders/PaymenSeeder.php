<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'id_order' => 1,
            'jumlah' => 2000,
            'provinsi' => 'Jawa timur',
            'kabupaten' => 'Ngawi',
            'kecamatan' => 'Paron',
            'kelurahan' => 'Ngale',
            'detail_alamat' => 'Pramesan',
            'latitude' => 14141,
            'longitude' => 14141,
            'status' => 'Diterima',
            'nama_pemilik_rekening' => 'Aal',
        ]);
    }
}
