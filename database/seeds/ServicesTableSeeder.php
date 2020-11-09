<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Service::truncate();
        Service::create(['nom_service' => 'Marketing Digital']);
        Service::create(['nom_service' => 'Business Intelligence']);
        Service::create(['nom_service' => 'Développement']);
    }
}
