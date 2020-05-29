<?php

use App\Rdv;
use Illuminate\Database\Seeder;

class RdvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rdv::class, 200)->create();
    }
}


// Rdv::create([]);
