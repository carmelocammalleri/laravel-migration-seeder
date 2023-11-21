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
        Schema::create('trains_station', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_date', $precision = 0);
            $table->dateTime('arrival_date', $precision = 0);
            $table->char('code_train');
            $table->tinyInteger('carriage_number');
            $table->boolean('train_on_schedule');
            $table->boolean('train_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains_station');
    }
};
