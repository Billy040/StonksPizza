<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manager')->insert([
            'naam' => 'John Doe',
            'email' => 'JohnDoe123@gmail.com',
            'wachtwoord' => Hash::make('JohnDoe123'),
            ]);
    }
}
