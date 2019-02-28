<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('joined')->nullable();
           $table->string('joined_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  
       
}
