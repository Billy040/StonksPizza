<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('pizza')->insert([
             'naam' => 'Pizza Margherita',
             'beschrijving' => 'Tomatensaus, mozzarella, basilicum',
             'prijs' => 8.50,
            ]);

         DB::table('pizza')->insert([
              'naam' => 'Pizza Salami',
              'beschrijving' => 'Tomatensaus, mozzarella, salami',
              'prijs' => 9.50,
            ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Hawaii',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, ananas',
                'prijs' => 10.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Shoarma',
                'beschrijving' => 'Tomatensaus, mozzarella, shoarma, knoflooksaus',
                'prijs' => 11.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Americana',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, pepperoni, rundergehakt',
                'prijs' => 12.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Tonno',
                'beschrijving' => 'Tomatensaus, mozzarella, tonijn, rode ui',
                'prijs' => 13.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Quattro Stagioni',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, champignons, artisjokken, olijven',
                'prijs' => 14.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Vegetariana',
                'beschrijving' => 'Tomatensaus, mozzarella, champignons, paprika, rode ui, olijven',
                'prijs' => 15.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Chicken Supreme',
                'beschrijving' => 'Tomatensaus, mozzarella, kip, paprika, rode ui, knoflooksaus',
                'prijs' => 16.50,
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Quattro Formaggi',
                'beschrijving' => 'Tomatensaus, mozzarella, gorgonzola, parmezaan, pecorino',
                'prijs' => 17.50,
                ]);
    }
}
