<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredienten')->insert([
            'naam' => 'Tomatensaus',
            'prijs' => 0.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Mozzarella',
            'prijs' => 0.75,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Ham',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Ananas',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Shoarma',
            'prijs' => 1.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Knoflooksaus',
            'prijs' => 0.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Pepperoni',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Rundergehakt',
            'prijs' => 1.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Basilicum',
            'prijs' => 0.25,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Olijven',
            'prijs' => 0.75,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Ui',
            'prijs' => 0.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Paprika',
            'prijs' => 0.75,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Champignons',
            'prijs' => 0.75,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Kip',
            'prijs' => 1.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Tonijn',
            'prijs' => 1.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Jalapeños',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Chilipepers',
            'prijs' => 0.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Paprika',
            'prijs' => 0.75,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Rode ui',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Artisjokken',
            'prijs' => 1.50,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Parmezaan',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'Gorgonzola',
            'prijs' => 1.25,
            'voorraad' => 1000,
        ]);

        DB::table('ingredienten')->insert([
            'naam' => 'pecorino',
            'prijs' => 1.00,
            'voorraad' => 1000,
        ]);



    }
}
