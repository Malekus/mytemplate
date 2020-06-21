<?php

use App\PersonneRdv;
use Illuminate\Database\Seeder;

class PersonneRdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PersonneRdv::class, 200)->create();
    }
}
