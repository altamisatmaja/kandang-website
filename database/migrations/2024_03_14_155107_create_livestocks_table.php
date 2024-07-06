<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livestocks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hewan_ternak');
            $table->integer('id_jenis_gender_hewan');
            $table->integer('id_jenis_hewan');
            $table->integer('id_kategori_hewan');
            $table->integer('id_partner');
            $table->integer('id_status_penjualan');
            $table->string('gambar_hewan');
            $table->dateTime('lahir_hewan');
            $table->text('deskripsi_hewan');
            $table->integer('berat_hewan_ternak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livestocks');
    }
}
