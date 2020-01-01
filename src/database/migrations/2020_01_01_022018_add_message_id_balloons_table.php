<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessageIdBalloonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balloons', function (Blueprint $table) {
            $table->integer('messages_id')->unsigned();
            $table->foreign('messages_id')
                ->references('id')->on('messages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balloons', function (Blueprint $table) {
            $table->dropForeign('balloons_messages_id_foreign');
        });
    }
}
