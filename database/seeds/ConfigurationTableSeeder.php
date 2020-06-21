<?php

use App\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create(['modele' => 'Personne', 'champ' => 'Type', 'libelle' => 'Conseiller']);
        Configuration::create(['modele' => 'Personne', 'champ' => 'Type', 'libelle' => 'Partenaire']);
        Configuration::create(['modele' => 'Personne', 'champ' => 'Type', 'libelle' => 'Référent']);
        Configuration::create(['modele' => 'Personne', 'champ' => 'Type', 'libelle' => 'Prescripteur']);

        Configuration::create(['modele' => 'Organisation', 'champ' => 'Type', 'libelle' => 'Entreprise']);
        Configuration::create(['modele' => 'Organisation', 'champ' => 'Type', 'libelle' => 'Pole emploi']);
        Configuration::create(['modele' => 'Organisation', 'champ' => 'Type', 'libelle' => 'Conseil départemental']);
    }
}


// Configuration::create([]);
