<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansHasPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians_has_pets', function (Blueprint $table) {
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->unsignedBigInteger('guardian_id');
            $table->foreign('guardian_id')->references('id')->on('guardians');
            $table->unsignedBigInteger('relation_type_id');
            $table->foreign('relation_type_id')->references('id')->on('relation_types');
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
        Schema::dropIfExists('guardians_has_pets');
    }
}
