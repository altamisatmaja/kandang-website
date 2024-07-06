<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeLivestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_livestocks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis_hewan');
            $table->bigInteger('id_category_livestocks');
            $table->text('deskripsi_jenis_hewan');
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
        Schema::dropIfExists('type_livestocks');
    }
}
