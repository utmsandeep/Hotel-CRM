<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perposals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('consumer_id')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->integer('lead_id')->nullable();
            $table->string('booking_id')->nullable();
            $table->longText('room_commitment_data')->nullable();
            $table->longText('greeting')->nullable();
            $table->longText('g_c_sales_agreement')->nullable();
            $table->longText('guest_room_commitment')->nullable();
            $table->longText('payment_packages_other')->nullable();
            $table->longText('current_applicable_taxes')->nullable();
            $table->longText('permission_for_event')->nullable();
            $table->longText('damage_payment')->nullable();
            $table->longText('deposite')->nullable();
            $table->longText('refunds_cancellation')->nullable();
            $table->longText('changes_acceptance')->nullable();
            $table->longText('bottom_signature')->nullable();
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
        Schema::dropIfExists('perposals');
    }
}
