<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelBanquetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_banquets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id')->nullable();
            $table->decimal('width_ft' , 8 , 2)->nullable();
            $table->decimal('height_ft' , 8 , 2)->nullable();
            $table->integer('no_of_entry_point')->nullable();
            $table->boolean('is_separate_entrance')->nullable();
            $table->text('pictures')->nullable();
            $table->longText('seating_style')->nullable();
            $table->longText('sort_description')->nullable();
            $table->longText('long_description')->nullable();
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
        Schema::dropIfExists('hotel_banquets');
    }
}
