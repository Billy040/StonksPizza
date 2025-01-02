<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            'status' => 'Ontvangen',
        ]);

        DB::table('status')->insert([
            'status' => 'Bereiden',
        ]);

        DB::table('status')->insert([
            'status' => 'In de oven',
        ]);

        DB::table('status')->insert([
            'status' => 'Klaar in de winkel',
        ]);

        DB::table('status')->insert([
            'status' => 'Onderweg',
        ]);

        DB::table('status')->insert([
            'status' => 'Afgeleverd',
        ]);
    }
}
