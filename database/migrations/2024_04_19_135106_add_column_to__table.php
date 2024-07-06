<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('category_livestocks', 'gambar_kategori_hewan')) {
            Schema::table('category_livestocks', function (Blueprint $table) {
                $table->string('gambar_kategori_hewan')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_table', function (Blueprint $table) {
            //
        });
    }
}
