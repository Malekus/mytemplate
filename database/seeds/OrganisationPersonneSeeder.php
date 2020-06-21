<?php

use App\OrganisationPersonne;
use Illuminate\Database\Seeder;

class OrganisationPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrganisationPersonne::class, 200)->create();
    }
}
