<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->integer('amount');
           
            $table->string('gateway_response');
            $table->string('customer_code');
            $table->string('bank');
            $table->string('status');
            $table->string('paid_at');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('member_dept');
            $table->integer('user_id');
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
        Schema::dropIfExists('payments');
    }
}
