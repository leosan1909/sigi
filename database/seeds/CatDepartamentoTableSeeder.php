<?php

use Illuminate\Database\Seeder;
use App\CatDepartamento;

class CatDepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		CatDepartamento::create([
       	    'id_departamento'=>1, 
        	'descripcion'=>'Departamento de Formación Básica',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>2, 
        	'descripcion'=>'Departamento de Ciencias en Ingeniería de la Computación',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>3, 
        	'descripcion'=>'Departamento de Ingeniería en Sistemas Computacionales',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>4, 
        	'descripcion'=>'Departamento de Formación Integral e Institucional',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>5, 
        	'descripcion'=>'Departamento de Evaluación y Seguimiento Académico',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>6, 
        	'descripcion'=>'Departamento de Innovación Educativa',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>7, 
        	'descripcion'=>'Unidad de Tecnología Educativa y Campus Virtual',
        	'id_subdireccion'=>1, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>8, 
        	'descripcion'=>'Departamento de Posgrado',
        	'id_subdireccion'=>2, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>9, 
        	'descripcion'=>'Departamento de Investigación',
        	'id_subdireccion'=>2, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>10, 
        	'descripcion'=>'Departamento de Gestión Escolar',
        	'id_subdireccion'=>3, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>11, 
        	'descripcion'=>'Departamento de Servicios Estudiantiles',
        	'id_subdireccion'=>3, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>12, 
        	'descripcion'=>'Departamento de Extensión y Apoyos Educativos',
        	'id_subdireccion'=>3, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>13, 
        	'descripcion'=>'Unidad Politécnica de Integración Social',
        	'id_subdireccion'=>3, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>14, 
        	'descripcion'=>'Departamento de Capital Humano',
        	'id_subdireccion'=>4, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>15, 
        	'descripcion'=>'Departamento de Recursos Financieros',
        	'id_subdireccion'=>4, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>16, 
        	'descripcion'=>'Departamento de Recursos Materiales y Servicios',
        	'id_subdireccion'=>4, 
        ]);
        CatDepartamento::create([
       	    'id_departamento'=>17, 
        	'descripcion'=>'Unidad de Informática',
        	'id_subdireccion'=>5, 
        ]);
        CatDepartamento::create([ 
        	'id_departamento'=>18, 
        	'descripcion'=>'Coordinación de Enlace y Gestión Técnica',
        	'id_subdireccion'=>5, 
        ]);
    }
}
