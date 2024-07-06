<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'provinsi_user')) {
                $table->string('provinsi_user')->nullable();
            }
            if (!Schema::hasColumn('users', 'kabupaten_user')) {
                $table->string('kabupaten_user')->nullable();
            }
            if (!Schema::hasColumn('users', 'kecamatan_user')) {
                $table->string('kecamatan_user')->nullable();
            }
            if (!Schema::hasColumn('users', 'kelurahan_user')) {
                $table->string('kelurahan_user')->nullable();
            }
            if (!Schema::hasColumn('users', 'latitude')) {
                $table->string('latitude')->nullable();
            }
            if (!Schema::hasColumn('users', 'longitude')) {
                $table->string('longitude')->nullable();
            }
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
