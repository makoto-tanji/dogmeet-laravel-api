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
            $table->unsignedTinyInteger('sunday')->default(0);
            $table->unsignedTinyInteger('monday')->default(0);
            $table->unsignedTinyInteger('tuesday')->default(0);
            $table->unsignedTinyInteger('wednesday')->default(0);
            $table->unsignedTinyInteger('thursday')->default(0);
            $table->unsignedTinyInteger('friday')->default(0);
            $table->unsignedTinyInteger('saturday')->default(0);
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
