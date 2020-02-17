<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerposalRoomHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perposal_room_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('perposal_id')->nullable();
            $table->longText('room_commitment_data')->nullable();
            $table->boolean('isActive')->default(false);
            $table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('perposal_room_history');
    }
}
