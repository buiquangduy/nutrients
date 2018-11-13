<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->truncate();
        DB::table('recipe_translations')->truncate();

        DB::table('recipes')->insert([
            [], [], []
        ]);

        DB::table('recipe_translations')->insert([
            [
                'recipe_id' => 1,
                'name' => 'Roasted pork',
                'locale' => 'en',
            ],
            [
                'recipe_id' => 1,
                'name' => 'ローストポーク',
                'locale' => 'ja',
            ],
            [
                'recipe_id' => 2,
                'name' => 'Mmoked pork',
                'locale' => 'en',
            ],
            [
                'recipe_id' => 2,
                'name' => 'スモークポーク',
                'locale' => 'ja',
            ],
            [
                'recipe_id' => 3,
                'name' => 'Pan-fried salmon',
                'locale' => 'en',
            ],
            [
                'recipe_id' => 3,
                'name' => 'サーモンパンフライ',
                'locale' => 'ja',
            ],
        ]);
    }
}
