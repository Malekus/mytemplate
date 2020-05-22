<?php

use App\Prescripteur;
use Illuminate\Database\Seeder;

class PrescripteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Prescripteur::class, rand(100, 300))->create();
    }
}


// Prescripteur::create([]);
