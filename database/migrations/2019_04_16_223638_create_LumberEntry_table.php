<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLumberEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LumberEntry', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');

            $table->integer('LumberDetId')->unsigned();
            $table->foreign('LumberDetId')->references('id')->on('LumberDetail');



            $table->dateTime('EntryDate');
            $table->integer('AmountEntered');

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
        Schema::dropIfExists('LumberEntry');
    }
}
