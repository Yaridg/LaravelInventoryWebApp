<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewStockItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NewStockItem', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('NewStockId')->references('id')->on('NewStock');
            $table->foreign('LumbDetTypeId')->references('id')->on('lumbertype');
            $table->foreign('LumbDetSizeId')->references('id')->on('lumbersize');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NewStockItem');
    }
}
