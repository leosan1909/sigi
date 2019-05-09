<?php

use Illuminate\Database\Seeder;
use App\CatEstatus;

class CatEstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         CatEstatus::create([
       	    'id_estatus'=>1, 
        	'descripcion'=>'Activo',
        ]);
         CatEstatus::create([
       	    'id_estatus'=>2, 
        	'descripcion'=>'Inactivo',
        ]);
    }
}
