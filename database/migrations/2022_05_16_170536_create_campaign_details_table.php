<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_details', function (Blueprint $table) {
            $table->unsignedInteger('id')->nullable();
            $table->unsignedInteger('campaign_id')->nullable();
            $table->timestamps();
        });
        Schema::table('campaign_details', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('campaign_id')->references('campaign_id')->on('campaigns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_details');
    }
}
