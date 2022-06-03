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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedTinyInteger('sunday');
            $table->unsignedTinyInteger('monday');
            $table->unsignedTinyInteger('tuesday');
            $table->unsignedTinyInteger('wednesday');
            $table->unsignedTinyInteger('thursday');
            $table->unsignedTinyInteger('friday');
            $table->unsignedTinyInteger('saturday');
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
        Schema::dropIfExists('schedules');
    }
};
