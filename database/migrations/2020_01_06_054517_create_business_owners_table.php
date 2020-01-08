<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by');
            $table->string('businessname');
            $table->string('firstname');
            $table->string('lastname');
            $table->tinyInteger('gender')->default(1);
            $table->string('subdomain');
            $table->string('email');
            $table->string('gst_no')->nullable();
            $table->string('primary_mobile')->nullable();
            $table->string('secondary_mobile')->nullable();
            $table->string('password');
            $table->text('street')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->integer('country');
            $table->boolean('isBlocked')->default(false);
            $table->boolean('isDeleted')->default(false);
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
        Schema::dropIfExists('business_owners');
    }
}
