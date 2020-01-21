<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Relation_type;


class CreateRelationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('relation',20);
            $table->timestamps();
        });

        Relation_type::insert([
            ['relation' => 'adoção'],
            ['relation' => 'lar temporário'],
            ['relation' => 'apadrinhamento']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_types');
    }
}
