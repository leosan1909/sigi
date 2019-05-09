<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSubdireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_subdireccion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_subdireccion');
            $table->string('descripcion');
        });
    }
                
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_subdireccion');
    }
}
