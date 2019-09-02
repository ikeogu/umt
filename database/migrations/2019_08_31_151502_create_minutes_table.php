<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('time');
            $table->string('day');
            $table->string('location');
            $table->string('calledby')->nullable();
            $table->string('purpose');
            $table->string('agender');
            $table->string('points');
            $table->string('conclusion');
            $table->string('pre_title')->nullable();
            $table->string('pre_name')->nullable();
            $table->string('signed');
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
        Schema::dropIfExists('minutes');
    }
}
