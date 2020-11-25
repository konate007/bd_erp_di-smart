<?php

use Illuminate\Database\Seeder;
use App\Models\Departement;


class DepartementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departement::create(['nom_departement' => 'RH']);
        Departement::create(['nom_departement' => 'Technique']);
        Departement::create(['nom_departement' => 'Marketing comm']);
    }
}
