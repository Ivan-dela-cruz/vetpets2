<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_rol', 30)->unique();
            $table->string('description_rol', 100)->nullable();
            $table->boolean('condicion_rol')->default(1);

            $table->timestamps();
        });
        DB::table('roles')->insert(array('id'=>'1','name_rol'=>'Administrador', 'description_rol'=>'Administradores de sistema'));
        DB::table('roles')->insert(array('id'=>'2','name_rol'=>'Cliente', 'description_rol'=>'Usuario de la aplicación'));
        DB::table('roles')->insert(array('id'=>'3','name_rol'=>'Moderador', 'description_rol'=>'Moderador de contedido en la API'));
        DB::table('roles')->insert(array('id'=>'4','name_rol'=>'Veterinario', 'description_rol'=>'Veterinario o gerente del veterinarias'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
