<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slick', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img_url');
            
            $table->integer('id_session')->unsigned();
            $table->foreign('id_session')->references('id')->on('session');

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
        Schema::dropIfExists('slick');
    }
}
