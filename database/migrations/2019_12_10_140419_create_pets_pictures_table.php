<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('picture',500);
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
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
        Schema::dropIfExists('pets_pictures');
    }
}
