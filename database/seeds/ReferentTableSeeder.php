<?php

use App\Referent;
use Illuminate\Database\Seeder;

class ReferentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Referent::class, rand(100, 150))->create();
    }
}


// Referent::create([]);
