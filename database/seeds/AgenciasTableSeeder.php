<?php

use Illuminate\Database\Seeder;
use App\Agencia;
class AgenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Agencia::class, 10)->create();

    }
}
