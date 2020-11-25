<?php

use Illuminate\Database\Seeder;
use App\Models\Type_Demande;


class TypeDemandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_Demande::create(['type' => 'Evolution']);
        Type_Demande::create(['type' => 'Incident']);
    }
}
