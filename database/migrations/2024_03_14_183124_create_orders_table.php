<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('invoice');
            $table->integer('sub_total');
            $table->string('status'); 
            $table->timestamps();
        });

        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partner');
            $table->integer('id_product');
            $table->integer('total');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orders_details');
    }
}
