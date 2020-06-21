<?php

use App\Personne;
use Illuminate\Database\Seeder;

class PersonneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personne::class, 100)->create();
    }
}


// Personne::create([]);