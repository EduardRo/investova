<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'first_name' => 'Adminescu',
                'last_name' => 'Adminache',
                'email' => 'admin@investova.ro',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('parola'),


            ],
            [
                'name' => 'AminaPavovlici',
                'first_name' => 'Amina',
                'last_name' => 'Pavlovici',
                'email' => 'amina.pavlovici@fondullibertatea.ro',
                'role' => 'institutional',
                'status' => 'active',
                'password' => bcrypt('parola'),


            ],
            [
                'name' => 'LicaPaulica',
                'first_name' => 'Paulica',
                'last_name' => 'Lica',
                'email' => 'lica.paulica@gmail.ro',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('parola'),


            ]
        ]);
    }
}
