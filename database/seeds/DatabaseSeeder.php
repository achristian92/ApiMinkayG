<?php

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
        $this->call([
        UsersTableSeeder::class,
        AgenciasTableSeeder::class,
        ModulosTableSeeder::class,
        RondasTableSeeder::class,
        ZonasTableSeeder::class
        
    ]);
    }
}
