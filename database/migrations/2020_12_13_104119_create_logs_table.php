<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id('logs_id');
            $table->string('borrower_name');
            $table->integer('equipment_id')->unsigned();
            $table->foreign('equipment_id')->refferences('equipment_id')->on('equipments');
            $table->date('datetime_borrowed');
            $table->date('datetime_returned');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
