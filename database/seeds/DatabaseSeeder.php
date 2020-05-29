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
            BeneficiairesTableSeeder::class,
            ConseillerTableSeeder::class,
            ReferentTableSeeder::class,
            PrescripteurTableSeeder::class,
            ProjetTableSeeder::class,
            ParcoursTableSeeder::class,
            PrestationTableSeeder::class,
            RdvTableSeeder::class
        ]);
    }
}
