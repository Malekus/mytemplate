<?php

use App\ParcourPersonne;
use Illuminate\Database\Seeder;

class ParcourPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ParcourPersonne::class, 200)->create();
    }
}
