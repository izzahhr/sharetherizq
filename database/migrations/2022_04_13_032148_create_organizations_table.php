<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
                $table->increments('organization_id');
                $table->string('organization_name');
                $table->string('organiztion_email')->unique();
                $table->string('organization_password');
                $table->unsignedInteger('admin_id')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
    
            Schema::table('organizations', function (Blueprint $table) {
                $table->foreign('admin_id')->references('id')->on('users');
            });
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
