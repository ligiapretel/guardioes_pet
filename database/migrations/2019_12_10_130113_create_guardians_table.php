<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 300);   
            $table->string('nickname', 300);
            $table->date('date_of_birth'); 
            $table->string('email', 300);
            $table->string('phone_number', 14);    
            $table->string('profile_picture', 300);   
            $table->string('address', 300);   
            $table->string('number', 14);    
            $table->string('complement', 100);    
            $table->interger('zip_code', 8);    
            $table->string('neighborhood', 100);   
            $table->string('city', 100);   
            $table->string('state', 100);   
            $table->text('about_the_guardian', 5000);   
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('Users');
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
        Schema::dropIfExists('guardians');
    }
}
