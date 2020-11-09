<?php

use Illuminate\Database\Seeder;
use App\Models\Niveau_Importance;


class NiveauImportanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Niveau_Importance::truncate();
        Niveau_Importance::create(['niveau' => 'faible']);
        Niveau_Importance::create(['niveau' => 'moyen']);
        Niveau_Importance::create(['niveau' => 'élevé']);
    }
}
