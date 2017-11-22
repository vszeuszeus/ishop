<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name',255)->unique();
            $table->string('photo_path',255)->nullable();
            $table->string('photo_alt',255)->nullable();
            $table->text('description',2000)->nullable();
            $table->boolean('premodaration');
            $table->string('url',255)->unique();
            $table->string('header_description',255)->nullable();
            $table->string('keywords', 255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('h1', 255)->unique();
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
        Schema::dropIfExists('categories');
    }
}
