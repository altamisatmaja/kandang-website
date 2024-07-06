<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Validator;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'harga_product' => rand(100000, 40000),
                'id_kategori' => rand(1, 3),
                'nama_product' => 'Hewan Jawa',
                'tags' => 'kambing',
                'diskon' => 0,
                'id_partner' => rand(3, 8),
                'gambar_hewan' => '17107921807.jpeg',
                'id_jenis_gender_hewan' => rand(1,2),
                'lahir_hewan' => rand(1,2),
                'berat_hewan_ternak' => rand(5,100),
                'stok_hewan_ternak' => rand(5, 10),
                'terjual' => rand(3, 5),
                'deskripsi_product' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar',
                'id_typelivestocks' => rand(1, 12),
            ]);
        }
    }
}
