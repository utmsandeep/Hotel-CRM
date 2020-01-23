<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_signatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('hotel_id')->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('role')->nullable();
            $table->longText('signature')->nullable();
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
        Schema::dropIfExists('contract_signatures');
    }
}
