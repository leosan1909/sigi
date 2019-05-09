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
            $table->increments('id');
            $table->string('no_empleado')->unique();
            $table->string('name'); //Cambiar a nombre
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('no_tarjeta')->unique();
            $table->string('email')->unique();
            $table->string('password'); //Cambiar a contrasena
            $table->char('activo', 1)->default('f');
            $table->char('horario_abierto', 1)->default('f');
            $table->char('sexo', 1);
            $table->smallInteger('id_estatus'); 
            $table->smallInteger('id_departamento'); 
            $table->smallInteger('id_subdireccion'); 
            $table->smallInteger('id_puesto'); 
            $table->smallInteger('id_horario'); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
