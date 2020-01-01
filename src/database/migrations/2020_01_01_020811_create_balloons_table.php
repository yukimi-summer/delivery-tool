<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalloonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balloons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->string('text', 2000)->nullable();
            $table->string('original_contents_uri', 1000)->nullable();
            $table->string('preview_contents_uri', 1000)->nullable();
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
        Schema::dropIfExists('balloons');
    }
}
