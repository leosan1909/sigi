<?php

use Illuminate\Database\Seeder;
use App\CatPuesto;

class CatPuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatPuesto::create([
       	    'id_puesto'=>1, 
        	'descripcion'=>'Administrador Capital Humano',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>2, 
        	'descripcion'=>'Auxiliar Capital Humano',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>3, 
        	'descripcion'=>'Director',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>4, 
        	'descripcion'=>'Subdirector',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>5, 
        	'descripcion'=>'Jefe de Académia',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>6, 
        	'descripcion'=>'Docente',
        ]);
        CatPuesto::create([ 
        	'id_puesto'=>7, 
        	'descripcion'=>'PAAE',
        ]);
    }
}
