<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airplaneId')->constrained('airplanes');
            $table->foreignId('departureAirportId')->constrained('airports');
            $table->foreignId('arrivalAirportId')->constrained('airports');
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->string('dayOfTheWeek');
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
        Schema::dropIfExists('connections');
    }
};
