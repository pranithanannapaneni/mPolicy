<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_product_details', function (Blueprint $table) {
            $table->increments('insurance_id');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('company_id')->on('company_registration'); 
            $table->string('insurance_product_name');
            $table->double('insurance_premium_amount');
            $table->double('insurance_cover_amount');
            $table->integer('policy_period');
            $table->string('policy_image_url');
            $table->integer('insurance_risk_percentage');
            $table->integer('insurance_type');
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
        Schema::dropIfExists('policy_product_details');
    }
}
