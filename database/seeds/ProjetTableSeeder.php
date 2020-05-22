<?php

use App\Projet;
use Illuminate\Database\Seeder;

class ProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Projet::class, rand(100, 300))->create();
    }
}


// Projet::create([]);
