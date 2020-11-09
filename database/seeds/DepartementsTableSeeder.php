<?php

use Illuminate\Database\Seeder;
use App\Models\Departement;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Departement::truncate();
        Departement::create(['nom_departement' => '']);
        Departement::create(['nom_departement' => '']);
        Departement::create(['nom_departement' => '']);
    }
}
