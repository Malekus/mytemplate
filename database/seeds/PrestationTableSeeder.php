<?php

use App\Prestation;
use Illuminate\Database\Seeder;

class PrestationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Prestation::class, rand(100, 300))->create();
    }
}


// Prestation::create([]);
