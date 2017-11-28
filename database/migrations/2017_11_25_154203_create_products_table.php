<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description', 255);
            $table->integer('product_status_id')->unsigned();
            $table->integer('product_group_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('product_status_id')->references('id')->on('product_statuses')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('product_group_id')->references('id')->on('product_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign('products_product_status_id_foreign');
            $table->dropForeign('products_product_group_id_foreign');
            $table->dropForeign('products_user_id_foreign');
        });
        Schema::dropIfExists('products');
    }
}
