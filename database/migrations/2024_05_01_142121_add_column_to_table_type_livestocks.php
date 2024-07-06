<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTableTypeLivestocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_livestocks', function (Blueprint $table) {
            $table->string('slug_typelivestocks')->nullable();
            $table->string('gambar_livestocks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_livestocks', function (Blueprint $table) {
            //
        });
    }
}
