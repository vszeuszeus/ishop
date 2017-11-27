<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('product_id')->nullable();
            $table->integer('order_status_id')->nullable();
            $table->double('payed_amount');
            $table->double('need_amount');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table){
            $table->dropForeign('orders_product_id_foreign');
            $table->dropForeign('orders_order_status_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
