<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formaat')->insert([
            'formaat' => 'Small',
        ]);

        DB::table('formaat')->insert([
            'formaat' => 'Medium',
        ]);

        DB::table('formaat')->insert([
            'formaat' => 'Large',
        ]);
    }
}
