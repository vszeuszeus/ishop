<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_group_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_group_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

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
    {   Schema::table('product_groups_user', function(Blueprint $table){
            $table->dropForeign('product_group_user_product_group_id_foreign');
            $table->dropForeign('product_group_user_user_id_foreign');
        });
        Schema::dropIfExists('product_group_user');
    }
}
