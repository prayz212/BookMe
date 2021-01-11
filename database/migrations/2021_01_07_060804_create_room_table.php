<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->string('id', 12);
            $table->primary('id');
            $table->string('name');
            $table->string('address');
            $table->string('district', '100');
            $table->string('province');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('bed');
            $table->integer('num_customer');
            $table->integer('max_num_customer');
            $table->double('area', 4, 1);
            $table->string('content');

            $table->boolean('wifi')->default(0);
            $table->boolean('television')->default(0);
            $table->boolean('air-condition')->default(0);
            $table->boolean('washing-machine')->default(0);
            $table->boolean('shampoo_conditioner')->default(0);
            $table->boolean('towels')->default(0);
            $table->boolean('soap')->default(0);
            $table->boolean('hair_dryer')->default(0);
            $table->boolean('fridge')->default(0);
            $table->boolean('balcony')->default(0);
            $table->boolean('toothpaste')->default(0);
            $table->boolean('microwave')->default(0);
            $table->boolean('windows')->default(0);
            
            $table->double('star', 2, 1)->default(0.0);
            $table->string('notes')->default('');
            $table->string('time_check')->default('12h AM');

            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('room_type');

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
        Schema::dropIfExists('room');
    }
}
