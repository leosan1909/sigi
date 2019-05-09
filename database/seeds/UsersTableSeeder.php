<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 
            'no_empleado' => '1111',
        	'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '11111',
        	'email'=>'israel-1104@hotmail.com',
        	'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
        	'id_puesto'=> 1,
        ]);
        User::create([ 
            'no_empleado' => '2222',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '2222',
            'email'=>'israel-1102@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 2,
        ]);
        User::create([ 
            'no_empleado' => '3333',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '3333',
            'email'=>'israel-1103@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 3,
        ]);
        User::create([ 
            'no_empleado' => '4444',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '44444',
            'email'=>'israel-11044@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 4,
        ]);
        User::create([ 
            'no_empleado' => '5555',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '5555',
            'email'=>'israel-1105@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 5,
        ]);
        User::create([ 
            'no_empleado' => '6666',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '6666',
            'email'=>'israel-1106@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 6,
        ]);
        User::create([ 
            'no_empleado' => '7777',
            'name' => 'Tania',
            'ap_paterno' => 'Rodriguez',
            'ap_materno' => 'Sarabia',
            'no_tarjeta' => '7777',
            'email'=>'israel-1107@hotmail.com',
            'password' => bcrypt('holamundo'),
            'activo'=>'v',
            'sexo'=>'H',
            'id_estatus'=> 1,
            'id_departamento'=> 1,
            'id_subdireccion'=> 1,
            'id_puesto'=> 7,
        ]);

    }
}
