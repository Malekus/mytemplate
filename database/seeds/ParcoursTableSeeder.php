<?php

use App\Parcours;
use Illuminate\Database\Seeder;

class ParcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parcours::class, rand(100, 300))->create();
    }
}


// Parcours::create([]);
