<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeatributeToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('gambar_hewan');
            $table->bigInteger('id_jenis_gender_hewan');
            $table->bigInteger('lahir_hewan');
            $table->string('berat_hewan_ternak');
            $table->bigInteger('stok_hewan_ternak');
            $table->bigInteger('terjual');
            $table->string('deskripsi_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
