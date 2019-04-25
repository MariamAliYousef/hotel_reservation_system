<?php


use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;


class CreateBookingRoomTable extends Migration
{

/**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {

        Schema::create('bokingRoom', function (Blueprint $table) {

          $table->bigIncrements('id');
          $table->string('Fname');
          $table->string('Lname');
          $table->string('email');
          $table->string('roomType');
          $table->string('checkInDate');
          $table->string('checkOutDate');
          $table->integer('visaNO');
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
        Schema::dropIfExists('bokingRoom');
    }
}
