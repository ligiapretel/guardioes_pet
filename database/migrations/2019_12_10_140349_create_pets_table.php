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
            $table->tinyInteger('docile')->nullable();
            $table->tinyInteger('like_affection')->nullable();
            $table->tinyInteger('like_children')->nullable();
            $table->tinyInteger('live_well_with_animals')->nullable();
            $table->tinyInteger('like_to_play')->nullable();
            $table->tinyInteger('well_behaved')->nullable();
            $table->tinyInteger('adoption_available')->nullable();
            $table->tinyInteger('temporary_home_available')->nullable();
            $table->tinyInteger('sponsorship_available')->nullable();
            $table->string('status', 2)->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
