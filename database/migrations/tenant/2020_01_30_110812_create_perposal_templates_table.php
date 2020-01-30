<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerposalTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perposal_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id')->nullable();
            $table->longText('greeting')->nullable();
            $table->longText('g_c_sales_agreement')->nullable();
            $table->longText('payment_packages_other')->nullable();
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
        Schema::dropIfExists('perposal_templates');
    }
}
