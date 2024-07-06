<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama_partner');
            $table->string('nama_perusahaan_partner');
            $table->string('provinsi_partner')->nullable();
            $table->string('kabupaten_partner')->nullable();
            $table->string('kecamatan_partner')->nullable();
            $table->string('kelurahan_partner')->nullable();
            $table->string('alamat_partner')->nullable();
            $table->string('foto_profil');
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
        Schema::dropIfExists('partners');
    }
}
