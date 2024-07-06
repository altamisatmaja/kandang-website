<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kondisi_hewan');
            $table->integer('id_jenis_gender_hewan');
            $table->integer('id_partner');
            $table->integer('id_jenis_hewan');
            $table->dateTime('lahir_hewan');
            $table->text('deskripsi_hewan');
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
        Schema::dropIfExists('farms');
    }
}
