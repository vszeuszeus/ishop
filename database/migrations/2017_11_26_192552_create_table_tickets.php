<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('ticket_status_id')->unsigned();
            $table->integer('manager_id')->unsigned();
            $table->integer('number');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ticket_status_id')->references('id')->on('ticket_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('manager_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function(Blueprint $table){
            $table->dropForeign('tickets_user_id_foreign');
            $table->dropForeign('tickets_order_id_foreign');
            $table->dropForeign('tickets_ticket_status_id_foreign');
            $table->dropForeign('tickets_manager_id_foreign');
        });
        Schema::dropIfExists('tickets');
    }
}
