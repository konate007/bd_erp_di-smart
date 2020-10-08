<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'prenom' => 'Admin',
            'nom' => 'Système',
            'email' => 'support@di-smart.com',
            'password' => Hash::make('passer123'),
            'fonction' => 'Admin',
            'role_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
