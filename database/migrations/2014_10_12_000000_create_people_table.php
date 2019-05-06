<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_people', 180)->unique();
            $table->string('surname_people', 180)->nullable();
            $table->string('ci_people', 20)->unique();
            $table->string('mobile_people', 20)->unique();
            $table->string('email_people', 100)->unique();
            $table->string('province_people', 180)->nullable();
            $table->string('canton_people', 180)->nullable();
            $table->string('address_people', 220)->nullable();
            $table->string('status_people', 20)->nullable();
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
        Schema::dropIfExists('people');
    }
}
