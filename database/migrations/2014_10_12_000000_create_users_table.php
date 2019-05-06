<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // id que toma como clave foranea a la clave primaria de la tabla people
            $table->integer('id')->unsigned();
            $table->integer('id_roles')->unsigned();
            $table->string('name_user')->unique();
            $table->string('password_user');
            $table->boolean('condicion_user')->default(1);
            $table->rememberToken();
            $table->timestamps();


        });
        Schema::table('users', function($table) {
            //relaciones de las tablas people y roles para asignar al usuario

            $table->foreign('id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_roles')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
