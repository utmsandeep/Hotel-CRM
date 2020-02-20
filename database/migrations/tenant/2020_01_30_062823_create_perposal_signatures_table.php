<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerposalSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perposal_signatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('consumer_id')->nullable();
            $table->string('perposal_id')->nullable();
            $table->string('text_signature')->nullable();
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
        Schema::dropIfExists('perposal_signatures');
    }
}
