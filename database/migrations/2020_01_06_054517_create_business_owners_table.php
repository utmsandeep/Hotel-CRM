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
            $table->string('chain_code')->nullable();
            $table->integer('yearly_subscription')->nullable();
            $table->decimal('price_per_year', 8, 2)->default(0.00)->nullable();
            $table->decimal('installation_cost', 8, 2)->default(0.00)->nullable();
            $table->decimal('customization_cost', 8, 2)->default(0.00)->nullable();
            $table->decimal('trainig_fees', 8, 2)->default(0.00)->nullable();
            $table->decimal('total', 8, 2)->default(0.00)->nullable();
            $table->string('email');
            $table->string('gst_no')->nullable();
            $table->string('primary_mobile')->nullable();
            $table->string('secondary_mobile')->nullable();
            $table->string('password')->nullable();
            $table->text('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('country')->nullable();
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
