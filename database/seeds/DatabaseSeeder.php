<?php
//ARCHIVO QUE INDICA QUE SEEDERS SE VAN A EJECUTAR

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ProjectTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(CatDepartamentoTableSeeder::class);
         $this->call(CatSubdireccionTableSeeder::class);
         $this->call(CatPuestoTableSeeder::class);
         $this->call(CatEstatusTableSeeder::class);
    }
}
