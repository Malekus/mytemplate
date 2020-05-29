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
        factory(Referent::class, 100)->create();
    }
}


// Referent::create([]);
