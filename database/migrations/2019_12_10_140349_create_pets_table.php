<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('type',10);
            $table->string('sex',2);
            $table->string('animal_bearing',30);
            $table->string('coal_type',100);
            $table->string('breed',100);
            $table->integer('age');
            $table->tinyInteger('castration');
            $table->tinyInteger('vaccinated');
            $table->tinyInteger('deworming');
            $table->text('description',5000);
            $table->tinyInteger('docile');
            $table->tinyInteger('like_affection');
            $table->tinyInteger('like_children');
            $table->tinyInteger('live_well_with_animals');
            $table->tinyInteger('like_to_play');
            $table->tinyInteger('well_behaved');
            $table->tinyInteger('adoption_available');
            $table->tinyInteger('temporary_home_available');
            $table->tinyInteger('sponsorship_available');
            $table->string('status', 2);
            $table->unsignedBigInteger('id_ngo');
            $table->foreign('id_ngo')->references('id')->on('ngos');
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
        Schema::dropIfExists('pets');
    }
}
