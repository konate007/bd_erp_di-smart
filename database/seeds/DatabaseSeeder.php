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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(NiveauImportanceSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TypeDemandeTableSeeder::class);
        $this->call(DepartementTableSeeder::class);

    }
    
}
