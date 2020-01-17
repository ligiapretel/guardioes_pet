<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Users_group;

class CreateUsersGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_type',45);
            $table->timestamps();
        });

        Users_group::insert([
            ['user_type' => 'administrador'],
            ['user_type' => 'ONG'],
            ['user_type' => 'guardiao']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_group');
    }
}
