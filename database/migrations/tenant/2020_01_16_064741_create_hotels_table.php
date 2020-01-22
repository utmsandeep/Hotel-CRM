<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('region')->nullable();
            $table->string('hotel_code')->nullable();
            $table->string('address')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('pan_card')->nullable();
            $table->integer('cluster_manager')->nullable();
            $table->integer('general_manager')->nullable();
            $table->integer('director_of_sales')->nullable();
            $table->integer('coordinator')->nullable();
            $table->integer('confirmation_stage')->default(0);
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
        Schema::dropIfExists('hotels');
    }
}
