<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookHallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_hall', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('f_name');
            $table->string('s_name');
            $table->string('email');
            $table->string('type');
			$table->integer('persons_number');
            $table->string('checkInDate');
            $table->string('checkInTime');
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
        Schema::dropIfExists('book_hall');
    }
}
