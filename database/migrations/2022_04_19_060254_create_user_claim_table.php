<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_claim', function (Blueprint $table) {
            $table->increments('claim_id');
            $table->integer('end_user_id')->unsigned();
            $table->foreign('end_user_id')->references('user_id')->on('user_details'); 
            $table->integer('insurance_id')->unsigned();
            $table->foreign('insurance_id')->references('insurance_id')->on('policy_product_details');
            $table->boolean('approve_reject');
            $table->double('claim_amount');
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
        Schema::dropIfExists('user_claim');
    }
}
