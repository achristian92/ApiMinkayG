<?php

use Illuminate\Database\Seeder;
use App\Ronda;
class RondasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Ronda::class, 5)->create();
    }
}
