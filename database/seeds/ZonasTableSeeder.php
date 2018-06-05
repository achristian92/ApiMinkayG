<?php

use Illuminate\Database\Seeder;
use App\Zona;
class ZonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Zona::class, 3)->create();

    }
}
