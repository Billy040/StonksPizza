<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientenPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 1, 'ingredienten_id' => 1],
            ['pizza_id' => 1, 'ingredienten_id' => 2],
            ['pizza_id' => 1, 'ingredienten_id' => 9],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 2, 'ingredienten_id' => 1],
            ['pizza_id' => 2, 'ingredienten_id' => 2],
            ['pizza_id' => 2, 'ingredienten_id' => 7],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 3, 'ingredienten_id' => 1],
            ['pizza_id' => 3, 'ingredienten_id' => 2],
            ['pizza_id' => 3, 'ingredienten_id' => 3],
            ['pizza_id' => 3, 'ingredienten_id' => 4],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 4, 'ingredienten_id' => 1],
            ['pizza_id' => 4, 'ingredienten_id' => 2],
            ['pizza_id' => 4, 'ingredienten_id' => 5],
            ['pizza_id' => 4, 'ingredienten_id' => 6],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 5, 'ingredienten_id' => 1],
            ['pizza_id' => 5, 'ingredienten_id' => 2],
            ['pizza_id' => 5, 'ingredienten_id' => 3],
            ['pizza_id' => 5, 'ingredienten_id' => 7],
            ['pizza_id' => 5, 'ingredienten_id' => 8],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 6, 'ingredienten_id' => 1],
            ['pizza_id' => 6, 'ingredienten_id' => 2],
            ['pizza_id' => 6, 'ingredienten_id' => 15],
            ['pizza_id' => 6, 'ingredienten_id' => 19],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 7, 'ingredienten_id' => 1],
            ['pizza_id' => 7, 'ingredienten_id' => 2],
            ['pizza_id' => 7, 'ingredienten_id' => 3],
            ['pizza_id' => 7, 'ingredienten_id' => 13],
            ['pizza_id' => 7, 'ingredienten_id' => 20],
            ['pizza_id' => 7, 'ingredienten_id' => 10],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 8, 'ingredienten_id' => 1],
            ['pizza_id' => 8, 'ingredienten_id' => 2],
            ['pizza_id' => 8, 'ingredienten_id' => 13],
            ['pizza_id' => 8, 'ingredienten_id' => 12],
            ['pizza_id' => 8, 'ingredienten_id' => 19],
            ['pizza_id' => 8, 'ingredienten_id' => 10],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 9, 'ingredienten_id' => 1],
            ['pizza_id' => 9, 'ingredienten_id' => 2],
            ['pizza_id' => 9, 'ingredienten_id' => 14],
            ['pizza_id' => 9, 'ingredienten_id' => 12],
            ['pizza_id' => 9, 'ingredienten_id' => 19],
            ['pizza_id' => 9, 'ingredienten_id' => 6],
        ]);

        DB::table('ingredienten_pizza')->insert([
            ['pizza_id' => 10, 'ingredienten_id' => 1],
            ['pizza_id' => 10, 'ingredienten_id' => 2],
            ['pizza_id' => 10, 'ingredienten_id' => 22],
            ['pizza_id' => 10, 'ingredienten_id' => 21],
            ['pizza_id' => 10, 'ingredienten_id' => 23],
        ]);
    }
}
