<?php

use Illuminate\Database\Seeder;
use App\Modulo;
class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Modulo::class, 6)->create();
    }
}
