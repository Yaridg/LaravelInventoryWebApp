<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLumberDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LumberDetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeID')->unsigned();
            $table->foreign('typeID')->references('id')->on('LumberType');

            $table->string('Description');
            $table->integer('Total_Amount');
            $table->string('QrCode');

            $table->integer('sizeID')->unsigned();
            $table->foreign('sizeID')->references('id')->on('LumberSize');

            $table->integer('BranchId')->unsigned();
            $table->foreign('BranchId')->references('id')->on('LumberYardBranch');

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
        Schema::drop('LumberDetail');
    }
}
