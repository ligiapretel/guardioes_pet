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
            $table->string('phone_number', 15)->nullable();    
            $table->string('profile_picture', 300);   
            $table->string('address', 300);   
            $table->string('number', 14);    
            $table->string('complement', 100)->nullable();    
            $table->string('zip_code', 8);    
            $table->string('neighborhood', 100);   
            $table->string('city', 100);   
            $table->string('state', 100);   
            $table->text('about_the_guardian', 5000);   
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
