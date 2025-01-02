<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('klant')->insert([
            'naam' => 'Jan Janssen',
            'adres' => 'Kerkstraat 1',
            'telefoonnummer' => '0612345678',
            'email' => 'JanJanssen1@gmail.com',
            'wachtwoord' => Hash::make('jan123'),
            ]);

    }
}
