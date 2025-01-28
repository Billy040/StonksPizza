<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johnDoe1@gmail.com',
            'password' => Hash::make('password'),
            'adres' => 'Kerkstraat 1',
            'telefoonnummer' => '0612345678',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'adres' => 'Kerkstraat 1',
            'telefoonnummer' => '0612345678',
        ]);
    }
}
