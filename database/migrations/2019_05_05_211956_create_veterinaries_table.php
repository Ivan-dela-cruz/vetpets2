<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */
    public function up()
    {
                /*
                 * atributos de la tabla
            name
            length
            latitude
            Province
            canton
            city
            address
            Photo
            schedule
                 * */
        Schema::create('veterinaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_veteri',180);
            $table->double('length_veteri');
            $table->double('latitude_veteri');
            $table->string('province_veteri',180);
            $table->string('canton_veteri',180);
            $table->string('address_veteri',200);
            $table->string('urlphoto_veteri',220);
            $table->string('schedule_veteri',180);
            $table->string('description_veteri',180);

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
        Schema::dropIfExists('veterinaries');
    }
}
