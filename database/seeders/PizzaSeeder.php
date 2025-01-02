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
             'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PMAR/NL_PMAR_all_hero_10620.jpg?v1182494538'
            ]);

         DB::table('pizza')->insert([
              'naam' => 'Pizza Salami',
              'beschrijving' => 'Tomatensaus, mozzarella, salami',
              'prijs' => 9.50,
              'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PSAL/NL_PSAL_all_hero_9096.jpg?v-843412995'
            ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Hawaii',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, ananas',
                'prijs' => 10.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PHAW/NL_PHAW_all_hero_9068.jpg?v-619998184'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Shoarma',
                'beschrijving' => 'Tomatensaus, mozzarella, shoarma, knoflooksaus',
                'prijs' => 11.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_nl_hero_14131.jpg?v223317330'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Americana',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, pepperoni, rundergehakt',
                'prijs' => 12.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PAME/NL_PAME_all_hero_7544.jpg?v979234471'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Tonno',
                'beschrijving' => 'Tomatensaus, mozzarella, tonijn, rode ui',
                'prijs' => 13.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PTON/NL_PTON_all_hero_7544.jpg?v1659828722'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Quattro Stagioni',
                'beschrijving' => 'Tomatensaus, mozzarella, ham, champignons, artisjokken, olijven',
                'prijs' => 14.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PQST/NL_PQST_nl_hero_13158.jpg?v-1589293489'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Vegetariana',
                'beschrijving' => 'Tomatensaus, mozzarella, champignons, paprika, rode ui, olijven',
                'prijs' => 15.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PVEG/NL_PVEG_all_hero_10620.jpg?v2145722000'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Chicken Supreme',
                'beschrijving' => 'Tomatensaus, mozzarella, kip, paprika, rode ui, knoflooksaus',
                'prijs' => 16.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/PCSU/NL_PCSU_nl_hero_9848.jpg?v1873294291'
                ]);

            DB::table('pizza')->insert([
                'naam' => 'Pizza Quattro Formaggi',
                'beschrijving' => 'Tomatensaus, mozzarella, gorgonzola, parmezaan, pecorino',
                'prijs' => 17.50,
                'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/P4CH/NL_P4CH_all_hero_7544.jpg?v1532493201'
                ]);
    }
}
