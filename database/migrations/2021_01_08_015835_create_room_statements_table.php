<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_statements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date', 10);
            $table->boolean('available')->default(1);
            $table->integer('price');
            $table->double('discount', 3, 1)->default(0);

            $table->string('id_room', 12);
            $table->foreign('id_room')->references('id')->on('room');

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
        Schema::dropIfExists('room_statements');
    }
}
