<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([ 
        	'name' => 'Proyecto A',
        	'descripcion'=>'WEB',
        ]);
        Project::create([ 
        	'name' => 'Proyecto B',
        	'descripcion'=>'Móvil',
        ]);
    }
}
