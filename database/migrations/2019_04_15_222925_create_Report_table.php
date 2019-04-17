<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Report', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ReportUserId')->unsigned();
            $table->foreign('ReportUserId')->references('id')->on('users');

            $table->string('Report_location');
            $table->date('Report_date');

            $table->integer('ReportLumberId')->unsigned();
            $table->foreign('ReportLumberId')->references('id')->on('LumberDetail');

            $table->integer('ReportEntryId')->unsigned();
            $table->foreign('ReportEntryId')->references('id')->on('LumberEntry');


            $table->integer('ReportRemovalId')->unsigned();
            $table->foreign('ReportRemovalId')->references('id')->on('LumberRemovalHistory');


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
        Schema::dropIfExists('Report');
    }
}
