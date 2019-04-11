<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLumberdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lumberdetail', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('typeID')->references('id')->on('lumbertype');
            $table->string('Description');
            $table->string('Pieces');
            $table->integer('QrCode');
            $table->foreign('sizeID')->references('id')->on('lumbersize');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lumberdetail');
    }
}
