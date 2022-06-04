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
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('dog_name', 191);
            $table->text('overview');
            $table->date('birthday');
            $table->unsignedTinyInteger('sex')->default(0);
            $table->string('thumbnail_path', 191);
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('dogs');
    }
};
