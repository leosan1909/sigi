<?php

use Illuminate\Database\Seeder;
use App\CatSubdireccion;

class CatSubdireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatSubdireccion::create([
       	    'id_subdireccion'=>1, 
        	'descripcion'=>'Subdirección Académica',
        ]);
        CatSubdireccion::create([
       	    'id_subdireccion'=>2, 
        	'descripcion'=>'Sección de Estudios de Posgrado e Investigación',
        ]);
        CatSubdireccion::create([
       	    'id_subdireccion'=>3, 
        	'descripcion'=>'Subdirección de Servicios Educativos e Integración Social',
        ]);
        CatSubdireccion::create([
       	    'id_subdireccion'=>4, 
        	'descripcion'=>'Subdirección Administrativa',
        ]);
        CatSubdireccion::create([
       	    'id_subdireccion'=>5, 
        	'descripcion'=>'Dirección',
        ]);
    }
}
