<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConfigurationTableSeeder::class,
            BeneficiairesTableSeeder::class,
            ConseillerTableSeeder::class,
            ReferentTableSeeder::class,
            PrescripteurTableSeeder::class,
            ProjetTableSeeder::class,
            ParcoursTableSeeder::class,
            PrestationTableSeeder::class,
            RdvTableSeeder::class,
            OrganisationTableSeeder::class,
            OrganisationParcourSeeder::class,
            PersonneTableSeeder::class,
            ParcourPersonneSeeder::class,
            OrganisationPersonneSeeder::class,
            PersonneRdvSeeder::class
        ]);
    }
}
