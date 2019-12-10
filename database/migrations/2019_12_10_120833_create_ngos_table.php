<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('social_name', 300);
            $table->string('cnpj', 18);
            $table->string('profile_picture', 300);
            $table->string('site', 300);
            $table->string('phone_number', 14);
            $table->string('responsable_name', 300);
            $table->string('address', 300);
            $table->string('number', 14);
            $table->string('complement', 100);
            $table->interger('zip_code', 8);
            $table->string('neighborhood', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->text('about_the_ngo', 5000);
            $table->string('bank_name', 100);
            $table->string('bank_agency', 15);
            $table->string('bank_account', 15);
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
        Schema::dropIfExists('ngos');
    }
}
