<?php

use App\Conseiller;
use Illuminate\Database\Seeder;

class ConseillerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Conseiller::class, 100)->create();
    }
}


// Conseiller::create([]);
