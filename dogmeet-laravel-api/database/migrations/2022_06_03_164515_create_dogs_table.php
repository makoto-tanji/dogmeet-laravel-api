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
            $table->string('thumbnail_path', 191)->nullable(true)->default('storage/images/noimage.jpg');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('area_id')
                ->references('id')
                ->on('areas')
                ->cascadeOnDelete();
            $table->foreign('breed_id')
                ->references('id')
                ->on('breeds')
                ->cascadeOnDelete();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
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
