<?php

use App\OrganisationParcour;
use Illuminate\Database\Seeder;

class OrganisationParcourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrganisationParcour::class, 200)->create();
    }
}
