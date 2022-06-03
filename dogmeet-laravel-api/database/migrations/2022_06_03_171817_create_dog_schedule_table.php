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
        Schema::create('dog_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedTinyInteger('meridian');
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
        Schema::dropIfExists('dog_schedule');
    }
};
