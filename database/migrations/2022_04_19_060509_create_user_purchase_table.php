<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_purchase', function (Blueprint $table) {
            $table->increments('purchase_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user_details'); 
            $table->integer('insurance_id')->unsigned();
            $table->foreign('insurance_id')->references('insurance_id')->on('policy_product_details');
            $table->string('status');
            $table->datetime('process_start_time');
            $table->datetime('process_complete_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_purchase');
    }
}
