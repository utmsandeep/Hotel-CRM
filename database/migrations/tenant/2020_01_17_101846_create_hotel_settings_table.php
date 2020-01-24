<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id');
            $table->string('logo')->nullable();
            $table->string('profile_picture')->nullable();
            $table->longText('room_type')->nullable();
            $table->text('hotel_four_pictures')->nullable();
            $table->longText('booking_policy')->nullable();
            $table->longText('deposite_refund_policy')->nullable();
            $table->longText('cancellation_policy')->nullable();
            $table->longText('no_show_policy')->nullable();
            $table->longText('kids_policy')->nullable();
            $table->longText('non_residiential_policy')->nullable();
            $table->longText('beverages_policy')->nullable();
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
        Schema::dropIfExists('hotel_settings');
    }
}
