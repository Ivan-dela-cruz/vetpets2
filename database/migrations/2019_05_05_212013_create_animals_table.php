<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         *      name
                weight
                age
                state
                sex
                Photo
         * */
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ani',200);
            $table->double('weight_ani');
            $table->string('sex_ani',50);
            $table->string('urlphoto_ani',220);
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
        Schema::dropIfExists('animals');
    }
}
