<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_methods')->truncate();
        DB::table('recipe_method_translations')->truncate();

        DB::table('recipe_methods')->insert([
            [], [], [], [], [], [], [], [], [], [], [], [], []
        ]);

        DB::table('recipe_method_translations')->insert([
            [
                'recipe_method_id' => 1,
                'name' => 'Bake',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 1,
                'name' => '焼く',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 2,
                'name' => 'Smokeriver',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 2,
                'name' => '煮る',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 3,
                'name' => 'Fry',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 3,
                'name' => '揚げる',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 4,
                'name' => 'Steam',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 4,
                'name' => '蒸す',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 5,
                'name' => 'Stir fry',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 5,
                'name' => '炒める',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 6,
                'name' => 'Dressing',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 6,
                'name' => '和える',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 7,
                'name' => 'Sow',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 7,
                'name' => '炙る',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 8,
                'name' => 'Slush',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 8,
                'name' => '湯通し',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 9,
                'name' => 'Cool',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 9,
                'name' => '冷やす',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 10,
                'name' => 'Parboil',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 10,
                'name' => '湯がく',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 11,
                'name' => 'Pickle',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 11,
                'name' => '漬ける',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 12,
                'name' => 'Cook',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 12,
                'name' => '炊く',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 13,
                'name' => 'Soak',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 13,
                'name' => '浸す',
                'locale' => 'ja',
            ],
        ]);
    }
}
