<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_departamento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_departamento');
            $table->string('descripcion');
            $table->smallInteger('id_subdireccion'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_departamento');
    }
}
