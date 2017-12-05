<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTovarGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('name', 255);
            $table->string('photo_path', 255);
            $table->string('photo_alt', 255);
            $table->integer('price');
            $table->integer('manager_pay');
            $table->integer('manager_pay_type_id')->unsigned();
            $table->text('description');
            $table->boolean('premodaration');
            $table->string('url',255)->unique();
            $table->string('header_description',255)->nullable();
            $table->string('keywords', 255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('h1', 255)->unique();
            $table->boolean('active');
            $table->integer('is_visible_price');
            $table->integer('is_visible_photo');
            $table->integer('is_visible_description');
            $table->integer('is_visible_tags');
            $table->integer('is_change_price');
            $table->integer('is_change_photo');
            $table->integer('is_change_description');
            $table->integer('is_change_tags');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('manager_pay_type_id')->references('id')->on('manager_pay_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_groups', function(Blueprint $table) {
            $table->dropForeign('product_groups_category_id_foreign');
            $table->dropForeign('product_groups_manager_pay_type_id_foreign');
        });
        Schema::dropIfExists('product_groups');
    }
}
